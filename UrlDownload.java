import java.io.*;
import java.net.MalformedURLException;
import java.net.URL;

public class UrlDownload {

   public static void main(String[] args) {
		
      try {
  
 URL url = new URL("http://www.itb.ac.id/news/4905.xhtml");
 
 BufferedReader reader = new BufferedReader
                      (new InputStreamReader(url.openStream()));

 BufferedWriter writer = new BufferedWriter
                      (new FileWriter("itb.html"));
 
 String line;

 while ((line = reader.readLine()) != null) {
 
     System.out.println(line);
		writer.write(line);
		writer.newLine();
 }

 reader.close();
 writer.close();
 }
    catch (MalformedURLException e) {
 
 e.printStackTrace();
   } catch (IOException e) {
 
 e.printStackTrace();
  }
 }

}
