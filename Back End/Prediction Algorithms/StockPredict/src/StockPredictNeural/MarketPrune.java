package StockPredictNeural;

import java.io.File;

import org.encog.ConsoleStatusReportable;
import org.encog.engine.network.activation.ActivationTANH;
import org.encog.ml.data.MLDataSet;
import org.encog.neural.data.NeuralDataSet;
import org.encog.neural.pattern.FeedForwardPattern;
import org.encog.neural.prune.PruneIncremental;
import org.encog.persist.EncogDirectoryPersistence;
import org.encog.util.simple.EncogUtility;

public class MarketPrune {

	public static void incremental(File dataDir) {
		File file = new File(dataDir, Config.TRAINING_FILE);

		if (!file.exists()) {
			System.out.println("Can't read file: " + file.getAbsolutePath());
			return;
		}

		MLDataSet training = EncogUtility.loadEGB2Memory(file);

		FeedForwardPattern pattern = new FeedForwardPattern();
		pattern.setInputNeurons(training.getInputSize());
		pattern.setOutputNeurons(training.getIdealSize());
		pattern.setActivationFunction(new ActivationTANH());

		PruneIncremental prune = new PruneIncremental(training, pattern, 100, 1, 10,
				new ConsoleStatusReportable());

		prune.addHiddenLayer(5, 50);
		prune.addHiddenLayer(0, 50);

		prune.process();

		File networkFile = new File(dataDir, Config.NETWORK_FILE);
		EncogDirectoryPersistence.saveObject(networkFile, prune.getBestNetwork());

	}
}
