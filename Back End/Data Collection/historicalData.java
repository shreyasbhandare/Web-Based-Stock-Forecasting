import java.io.IOException;
import java.math.BigDecimal;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;
import java.text.SimpleDateFormat;
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.util.Calendar;
import java.util.Date;
import java.util.List;
import java.util.Map;
import java.util.Map.Entry;

import yahoofinance.Stock;
import yahoofinance.YahooFinance;
import yahoofinance.histquotes.HistoricalQuote;
import yahoofinance.histquotes.Interval;
import yahoofinance.quotes.stock.StockQuote;
import yahoofinance.quotes.stock.StockStats;

public class historicalData {

	public static void main(String[] args) throws IOException {
		// TODO Auto-generated method stub
		try {
			
			String[] symbols = new String[] {"GOOG", "YHOO", "BAC", "FB", "AMZN"};
			Map<String, Stock> stocks = YahooFinance.get(symbols); // single request
			//Iterator<Map<String, Stock>> it = stocks.entrySet().iterator();
			
			
			for (Entry<String, Stock> entry : stocks.entrySet() )
			{
				Stock s = YahooFinance.get(entry.getKey());
				Calendar from = Calendar.getInstance();
				from.add(Calendar.YEAR, -1);
				Calendar to = Calendar.getInstance();
				
				List<HistoricalQuote> l = s.getHistory(from, to, Interval.DAILY);
				
				for (int i = 0; i < l.size(); i++)
				{
					String name = s.getName();
					String sym = s.getSymbol();
					//System.out.println(l.get(i));
					HistoricalQuote l2 = l.get(i);
					
					BigDecimal bd = l2.getOpen();
					Double openValue = bd.doubleValue();
					
					bd = l2.getClose();
					Double closeValue = bd.doubleValue();
					
					bd = l2.getHigh();
					Double highValue = bd.doubleValue();
					
					bd = l2.getLow();
					Double lowValue = bd.doubleValue();
					
					Calendar ld = l2.getDate();
					//System.out.println(ld);
					Date d = ld.getTime();
					int  year = d.getYear();
					year = year + 1900;
					int month = d.getMonth();
					int day = d.getDate();
					String da = year+"-"+month+"-"+day;
					
					
					
					
					StockQuote sq = s.getQuote();
					long volume = sq.getVolume();
					
					//--------------------connect to db----------------------
				    Connection conn = null;
				     Statement stmt = null;
				     
				    conn = DriverManager.getConnection("jdbc:mysql://localhost/stocks?" +
						                                   "user=root&password=");
						stmt = conn.createStatement();		 
				    
				    String sql = "INSERT INTO stockhistory (Symbol, Name, Time, OpenPrice, HighPrice, LowPrice, ClosePrice, Volume)" +
			                   "VALUES ('"+sym+"', '"+name+"', '"+da+"', "+openValue+", "+highValue+", "+lowValue+", "+closeValue+", "+volume+")";
				    stmt.executeUpdate(sql); 
				    
				    conn.close();
				    
				    					
				}			
			}
		}
			catch (SQLException ex) {
			    // handle any errors
			    System.out.println("SQLException: " + ex.getMessage());
			    System.out.println("SQLState: " + ex.getSQLState());
			    System.out.println("VendorError: " + ex.getErrorCode());
			}
			
			
			
	}// end of main


}
