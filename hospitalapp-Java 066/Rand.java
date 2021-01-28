package hospitalapp;

import java.util.Random;

public class Rand {

    
             
        Random rand = new Random();
    public String patientNumber = "" + rand.nextInt(10) + rand.nextInt(10) + rand.nextInt(10) + rand.nextInt(10) + rand.nextInt(10);

    public String bedNumber = "" + rand.nextInt(10) + rand.nextInt(10) + rand.nextInt(10);

}

