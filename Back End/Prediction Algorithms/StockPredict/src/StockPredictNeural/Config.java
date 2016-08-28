package StockPredictNeural;

import org.encog.ml.data.market.TickerSymbol;

public class Config {
	
	
	public static final String TRAINING_FILE = "marketData.egb";
	public static final String NETWORK_FILE = "marketNetwork.eg";
	public static final int TRAINING_MINUTES = 1;
	public static final int HIDDEN1_COUNT = 20;
	public static final int HIDDEN2_COUNT = 0;
	public static final int INPUT_WINDOW = 10;
	public static final int PREDICT_WINDOW = 1;
	public static final TickerSymbol TICKER = new TickerSymbol("YHOO");

}
