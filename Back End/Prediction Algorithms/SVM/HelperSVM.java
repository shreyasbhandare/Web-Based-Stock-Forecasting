package svm_new;

import java.text.DateFormat;
import java.text.DateFormatSymbols;
import java.text.NumberFormat;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.time.LocalDate;

import svm_new.PredictStockSVM;
import org.encog.ml.data.MLData;
import org.encog.ml.data.basic.BasicMLData;
import org.encog.ml.svm.SVM;
import org.encog.util.arrayutil.NormalizedField;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;
import java.sql.Timestamp;
import java.util.Calendar;
import java.util.Date;
import java.util.TimeZone;

// predictor helper class
public class HelperSVM {
	public static void predictSVM(SVM network)
	{
			NumberFormat f = NumberFormat.getNumberInstance();
			f.setMaximumFractionDigits(4);
			f.setMinimumFractionDigits(4);
		
			double max = PredictStockSVM.Stocks[0];
	
			for (int i = 1; i < PredictStockSVM.Stocks.length; i++) 
			{
				if (PredictStockSVM.Stocks[i] > max) {
					max = PredictStockSVM.Stocks[i];
				}
			}
			
			double min = PredictStockSVM.Stocks[0];

			for (int i = 1; i < PredictStockSVM.Stocks.length; i++) {
				if (PredictStockSVM.Stocks[i] < min) {
					min = PredictStockSVM.Stocks[i];
				}
			}
		
			// (maximum data size - 1)
			int year = 6;
			
			// calculate based on actual data
			MLData input = new BasicMLData(PredictStockSVM.WINDOW_SIZE);

			for(int i=0;i<input.size();i++)
			{
				input.setData(i,PredictStockSVM.normalizedStocks[(year-PredictStockSVM.WINDOW_SIZE)+i+1]);
			}
			MLData output = network.compute(input);
			double prediction = output.getData(0);
			double pred = (((prediction - 0.1)*(max- min))/(0.9-0.1)) + min;
			
			// display
			System.out.println("predicted "+(year+1)+" :"+pred);
				
			SimpleDateFormat sdf = new SimpleDateFormat("yyyy-MM-dd");
			Calendar c = Calendar.getInstance();
			   
			boolean val = true;
			while (val)
			{
				int dow = c.get (Calendar.DAY_OF_WEEK);
				boolean isWeekday = ((dow >= Calendar.MONDAY) && (dow <= Calendar.FRIDAY));
				if (isWeekday)
		  	    {
				   val = false;
		  	    }
				else
				{
					c.add(Calendar.DATE, 1);
				}
			}
			   
			String dt = sdf.format(c.getTime());

			try 
			{
			    Connection conn = null;

			    Statement stmt = null;
			       
			    conn = DriverManager.getConnection("jdbc:mysql://localhost/stocks?" + "user=root&password=");
			       
			    String symb = "AMZN";
			       
			    //stmt = conn.createStatement();  
			       
			    //System.out.println(dt+" "+pred);
			       
			    //String sql = "INSERT INTO svm (Symbol, date, predicted_val)" + "VALUES ('"+symb+"','"+dt+"','"+pred+"')";
			                     
			    //stmt.executeUpdate(sql);
			    
			    conn.close();
			} 
			      
			catch (SQLException e) 
			{
				// TODO Auto-generated catch block
				e.printStackTrace();
			}		
	}
}
