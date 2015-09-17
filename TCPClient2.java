/* Ini adalah tugas ke 2, yaitu mengirim file dari server ke client.
Pemberian Tugas : 15 September 2015
Pengumpulan Tugas : 17 September 2015 */


import java.io.*;
import java.net.*;
import java.lang.*;

class TCPClient 
{
 public static void main(String argv[]) throws Exception
 {
  boolean isExit = false;
  Socket clientSocket = new Socket("localhost", 6789);
  String sentence;
  String modifiedSentence;
  
  while(!(isExit)) 
   {  
  BufferedReader inFromUser = new BufferedReader(
     new InputStreamReader(System.in));
  DataOutputStream outToServer = new DataOutputStream(
     clientSocket.getOutputStream());
  BufferedReader inFromServer = new BufferedReader(new InputStreamReader(clientSocket.getInputStream()));
	 
  sentence = inFromUser.readLine();
  outToServer.writeBytes(sentence+"\n");
  modifiedSentence = inFromServer.readLine();
  System.out.println("FROM SERVER: " + 
          modifiedSentence);
	if(sentence.equals("1")){
	
	byte[] mybytearray = new byte[1024];
    InputStream is = clientSocket.getInputStream();
    FileOutputStream fos = new FileOutputStream("fileSent1.txt");// nama file yg diterima dari server pada client
    BufferedOutputStream bos = new BufferedOutputStream(fos);
    int bytesRead = is.read(mybytearray, 0, mybytearray.length);
    bos.write(mybytearray, 0, bytesRead);
    bos.close();
	sentence = "0";
	
	}
	else if(sentence.equals("2")){
		byte[] mybytearray = new byte[1024];
		InputStream is = clientSocket.getInputStream();
		FileOutputStream fos = new FileOutputStream("fileSent2.txt");// nama file yang diterima dari server pada client
		BufferedOutputStream bos = new BufferedOutputStream(fos);
		int bytesRead = is.read(mybytearray, 0, mybytearray.length);
		bos.write(mybytearray, 0, bytesRead);
		bos.close();
		sentence = "0";
	}
	else if(sentence.equals("3")){
		byte[] mybytearray = new byte[1024];
		InputStream is = clientSocket.getInputStream();
		FileOutputStream fos = new FileOutputStream("fileSent3.txt");// nama file yang diterima dari server pada client
		BufferedOutputStream bos = new BufferedOutputStream(fos);
		int bytesRead = is.read(mybytearray, 0, mybytearray.length);
		bos.write(mybytearray, 0, bytesRead);
		bos.close();
		sentence = "0";
	}
	}
  clientSocket.close();
 }
}
