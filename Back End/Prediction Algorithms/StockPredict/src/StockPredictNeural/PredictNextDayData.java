package StockPredictNeural;

import java.io.File;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;
import java.text.DecimalFormat;
import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.GregorianCalendar;

import org.encog.ml.data.MLData;
import org.encog.ml.data.MLDataPair;
import org.encog.ml.data.market.MarketDataDescription;
import org.encog.ml.data.market.MarketDataType;
import org.encog.ml.data.market.MarketMLDataSet;
import org.encog.ml.data.market.loader.MarketLoader;
import org.encog.ml.data.market.loader.YahooFinanceLoader;
import org.encog.neural.networks.BasicNetwork;
import org.encog.persist.EncogDirectoryPersistence;



public class PredictNextDayData {
	static double [] pred = new double[40];
	public static MarketMLDataSet grabData() {
		MarketLoader loader = new YahooFinanceLoader();
		MarketMLDataSet result = new MarketMLDataSet(loader,
				Config.INPUT_WINDOW, Config.PREDICT_WINDOW);
		MarketDataDescription desc = new MarketDataDescription(Config.TICKER,
				MarketDataType.ADJUSTED_CLOSE, true, true);
		result.addDescription(desc);

		Calendar end = new GregorianCalendar();// end today
		//end.add(Calendar.DATE, 1);
		Calendar begin = (Calendar) end.clone();// begin 30 days ago
		
		begin.add(Calendar.DATE, -20);
		

		result.load(begin.getTime(), end.getTime());
		result.generate();
		
		
		

		return result;

	}

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		
		File file = new File("E:\\Encog",Config.NETWORK_FILE);

		if (!file.exists()) {
			System.out.println("Can't read file: " + file.getAbsolutePath());
			return;
		}

		BasicNetwork network = (BasicNetwork)EncogDirectoryPersistence.loadObject(file);	

		MarketMLDataSet data = grabData();

		DecimalFormat format = new DecimalFormat("#0.0000");
		MLData input = null;
		MLData predictData;
		double predict;
		int count = 0;
		int correct = 0;
		
		double [] vec = new double[10];
		for (MLDataPair pair : data) {
			 input = pair.getInput();
			MLData actualData = pair.getIdeal();
			/*
			input.setData(0, input.getData(1));
			input.setData(1, input.getData(2));
			input.setData(2, input.getData(3));
			input.setData(3, input.getData(4));
			input.setData(4, input.getData(5));
			input.setData(5, input.getData(6));
			input.setData(6, input.getData(7));
			input.setData(7, input.getData(8));
			input.setData(8, input.getData(9));
			input.setData(9, actualData.getData(0));
			
			vec[0] = input.getData(0);
			vec[1] = input.getData(1);
			vec[2] = input.getData(2);
			vec[3] = input.getData(3);
			vec[4] = input.getData(4);
			vec[5] = input.getData(5);
			vec[6] = input.getData(6);
			vec[7] = input.getData(7);
			vec[8] = input.getData(8);
			vec[9] = input.getData(9);
			*/
			
			
			//System.out.println("Count:"+ count);
			/*
			System.out.println(input.getData(0));
			System.out.println(input.getData(2));
			System.out.println(input.getData(3));
			System.out.println(input.getData(4));
			System.out.println(input.getData(5));
			System.out.println(input.getData(6));
			System.out.println(input.getData(7));
			System.out.println(input.getData(8));
			System.out.println(input.getData(9));
			//System.out.println(input.size());
			*/
			predictData = network.compute(input);

			//double actual = actualData.getData(0);
			predict = predictData.getData(0);
			pred[count] = predict;
			//System.out.println(pred[count]);
			
			count++;
		}
		
			// run after market is closed
			SimpleDateFormat sdf = new SimpleDateFormat("yyyy-MM-dd");
			Calendar c = Calendar.getInstance();
			
			// add this line if you are running after market is closed
			c.add(Calendar.DATE, 1);
			
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
			
			System.out.println("Day " + dt +
					" predict=" + format.format(pred[2]));
					
			 
			
		
		
		if (count == 3)
		{
			for (int i = 0 ; i < 31; i++)
			{
				//System.out.println("Loop: "+i);						
			
			input.setData(0, input.getData(1));
			input.setData(1, input.getData(2));
			input.setData(2, input.getData(3));
			input.setData(3, input.getData(4));
			input.setData(4, input.getData(5));
			input.setData(5, input.getData(6));
			input.setData(6, input.getData(7));
			input.setData(7, input.getData(8));
			input.setData(8, input.getData(9));
			input.setData(9, pred[2+i]);
			/*
			System.out.println(input.getData(0));
			System.out.println(input.getData(2));
			System.out.println(input.getData(3));
			System.out.println(input.getData(4));
			System.out.println(input.getData(5));
			System.out.println(input.getData(6));
			System.out.println(input.getData(7));
			System.out.println(input.getData(8));
			System.out.println(input.getData(9));
			*/
			 predictData = network.compute(input);

			//double actual = actualData.getData(0);
			predict = predictData.getData(0);
			pred[count] = predict;
			
			
			c.add(Calendar.DATE, 1);
			
			val = true;
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
			
				dt = sdf.format(c.getTime());			
				System.out.println("Day " + dt +
					" predict=" + format.format(pred[count]));	
				
				
				count++;
			}
			
		}
		
		
		
		
		
		
		
		
		
		
		
		
		/*
		
		SimpleDateFormat sdf = new SimpleDateFormat("yyyy-MM-dd");
		Calendar c = Calendar.getInstance();
		
		//c.add(Calendar.DATE, 1);
		
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
		
		System.out.println("Day " + dt +
				" predict=" + format.format(pred[2]));
		*/
		
		/*
	    try {
	    	Connection conn = null;

		     Statement stmt = null;

		     

		     conn = DriverManager.getConnection("jdbc:mysql://localhost/stocks?" + "user=root&password=");

				stmt = conn.createStatement();		 

		    

		    String sql = "INSERT INTO ann (date, predicted_val)" +

	                   "VALUES ('"+dt+"', '"+pred[2]+"')";
			stmt.executeUpdate(sql);
			
			conn.close();
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} 

	    */
		
	}	
		

}


