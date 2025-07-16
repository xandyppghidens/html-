import org.ietf.*public class mente {

    import org.deepLearning4j.nn.api.OutputLayer;
    import org
};;
import java.util.ArrayList;
import java.util.List;

public class Mente {
    public static void main(String[] args) {
        // Configuração do modelo
        int inputSize = 2; // Número de entradas
        int outputSize = 1; // Número de saídas
        int hiddenLayerSize = 10; // Número de neurônios na camada oculta

        MultiLayerConfiguration config = new NeuralNetConfiguration.Builder()
                .updater(new Sgd(0.1)) // Taxa de aprendizado
                .list()
                .layer(0, new DenseLayer.Builder()
                        .nIn(inputSize)
                        .nOut(hiddenLayerSize)
                        .activation(Activation.RELU)
                        .build())
                .layer(1, new OutputLayer.Builder()
                        .nIn(hiddenLayerSize)
                        .nOut(outputSize)
                        .activation(Activation.SIGMOID)
                        .lossFunction(LossFunctions.LossFunction.MSE)
                        .build())
                .build();

        MultiLayerNetwork model = new MultiLayerNetwork(config);
        model.init();
        model.setListeners(new ScoreIterationListener(10));

        // Dados de treinamento (exemplo simples)
        INDArray input = Nd4j.create(new double[][]{
                {0, 0},
                {0, 1},
                {1, 0},
                {1, 1}
        });
        INDArray labels = Nd4j.create(new double[][]{
                {0},
                {1},
                {1},
                {0}
        });

        DataSet dataSet = new DataSet(input, labels);
        List<DataSet> list = dataSet.asList();
        DataSetIterator iterator = new ListDataSetIterator<>(list, 4);

        // Treinamento
        for (int epoch = 0; epoch < 1000; epoch++) {
            iterator.reset();
            model.fit(iterator);
        }

        // Teste
        INDArray output = model.output(input);
        System.out.println("Saída:");
        System.out.println(output);
    }
}