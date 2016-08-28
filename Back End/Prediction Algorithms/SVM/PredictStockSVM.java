package svm_new;

import java.io.IOException;
import java.math.BigDecimal;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.text.NumberFormat;


import org.encog.Encog;
import org.encog.ml.data.MLData;
import org.encog.ml.data.MLDataSet;
import org.encog.ml.data.basic.BasicMLData;
import org.encog.ml.svm.SVM;
import org.encog.ml.svm.training.SVMTrain;
import org.encog.util.EngineArray;
import org.encog.util.arrayutil.NormalizeArray;
import org.encog.util.arrayutil.TemporalWindowArray;

/**
 * This example predicts Stocks using a support vector machine.
 * 
 * The sunspot data is from an example by Karsten Kutza, 
 * written in C on 1996-01-24.
 * http://www.neural-networks-at-your-fingertips.com
 */
public class PredictStockSVM {

	public static double[] Stocks = new double[7];
	
	public final static int WINDOW_SIZE = 5;
	//public final static int STARTING_YEAR = 1;
	//public final static int TRAIN_START = WINDOW_SIZE;
	//public final static int TRAIN_END = 150;
	//public final static int EVALUATE_START = 151;
	//public final static int EVALUATE_END = Stocks.length;
	
	/**
	 * This really should be lowered, I am setting it to a level here that will
	 * train in under a minute.
	 */
	public final static double MAX_ERROR = 0.01;

	public static double[] normalizedStocks;
	
	public void normalizeStocks(double lo, double hi) {
        NormalizeArray norm = new NormalizeArray();
        norm.setNormalizedHigh(hi);
        norm.setNormalizedLow(lo);
   
        // create arrays to hold the normalized Stocks
        normalizedStocks = norm.process(Stocks);
	}
	
	
	public MLDataSet generateTraining() {		
		TemporalWindowArray temp = new TemporalWindowArray(WINDOW_SIZE, 1);
		temp.analyze(this.normalizedStocks);
		return temp.process(this.normalizedStocks);
	}
	
	public SVM createNetwork()
	{
		SVM network = new SVM(WINDOW_SIZE,true);
		return network;
	}
	
	public void train(SVM network,MLDataSet training)
	{
		final SVMTrain train = new SVMTrain(network, training);
		train.iteration();
	}
	
	public void run()
	{
		normalizeStocks(0.1,0.9);
		SVM network = createNetwork();
		MLDataSet training = generateTraining();
		train(network,training);
		HelperSVM.predictSVM(network);
		
	}
	
	public static void main(String args[])
	{
		try {
			//connecting to db and retriving historical data for prediction
			Connection conn = DriverManager.getConnection("jdbc:mysql://localhost/stocks?" + "user=root&password=");
			
			Statement stmt = conn.createStatement();		 
			  
			String sql = "SELECT ClosePrice FROM stockhistory WHERE stockhistory.Symbol = 'AMZN'";
			
			stmt.executeQuery(sql);
			
			ResultSet rs = stmt.getResultSet();
			int count = 0;
			int k = 0;
			while (rs.next())
			{
			    double idVal = rs.getDouble ("ClosePrice");
			    //System.out.println("Close Price = " + idVal);
			    if (count <7)
			    {
			    	Stocks[k]=idVal;
			    	k++;
			    }
			    ++count;
		    }
			
			rs.close ();
			stmt.close ();
			//System.out.println (count + " rows were retrieved");
		} 
		
		
		catch (SQLException e) 
		{
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	  
		PredictStockSVM sunspot = new PredictStockSVM();
		sunspot.run();
		Encog.getInstance().shutdown();
		//System.out.println(Stocks.length);
	}

}
