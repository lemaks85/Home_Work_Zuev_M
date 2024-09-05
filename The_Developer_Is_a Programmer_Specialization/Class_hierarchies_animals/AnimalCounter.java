public class AnimalCounter implements AutoCloseable{
    private static Integer counter = 0;

    public void add(){
        counter++;
    }

    public Integer getCount(){
        return counter;
    }

    @Override
    public void close() throws Exception {

    }
}