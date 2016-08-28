
import java.io.IOException;
import java.math.BigDecimal;
import java.util.Calendar;
import java.util.Map;
import java.util.Map.Entry;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;
import java.time.LocalDateTime;
import yahoofinance.Stock;
import yahoofinance.YahooFinance;
import yahoofinance.quotes.stock.StockQuote;
import yahoofinance.quotes.stock.StockStats;

public class YahooAPI {

	public static void main(String[] args) throws IOException {
		
		try {
						
			String[] symbols = new String[] {"GOOG", "YHOO", "BAC", "FB", "AMZN"};
			Map<String, Stock> stocks = YahooFinance.get(symbols); // single request
			//Iterator<Map<String, Stock>> it = stocks.entrySet().iterator();
			for (Entry<String, Stock> entry : stocks.entrySet() )
			{
				Stock s = YahooFinance.get(entry.getKey());
				StockStats ss = s.getStats();
			    System.out.println(entry.getKey() );
			    s.print();
			    String sym = s.getSymbol();
			    String comName  = s.getName();
			    Calendar cc = Calendar.getInstance();
			    LocalDateTime lt = LocalDateTime.now();
			    StockQuote sq = s.getQuote();
			    BigDecimal bd =sq.getPrice();
			    Double currentPrice = bd.doubleValue() ;
			    
			    //--------------------connect to db----------------------
			    Connection conn = null;
			     Statement stmt = null;
			     
			    conn = DriverManager.getConnection("jdbc:mysql://localhost/stocks?" +
					                                   "user=root&password=");
					stmt = conn.createStatement();				 
			    
			    String sql = "INSERT INTO stockcurrent " +
		                   "VALUES ("+sym+", "+comName+", "+lt+","+currentPrice+")";	    
			    
			}   // end of for loop

			   
			} catch (SQLException ex) {
			    // handle any errors
			    System.out.println("SQLException: " + ex.getMessage());
			    System.out.println("SQLState: " + ex.getSQLState());
			    System.out.println("VendorError: " + ex.getErrorCode());
			}
	}		// end of main

}		// end of main class
