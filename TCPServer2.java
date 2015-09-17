/* Ini adalah tugas ke 2, yaitu mengirim file dari server ke client.
Pemberian Tugas : 15 September 2015
Pengumpulan Tugas : 17 September 2015 */

import java.io.*;
import java.net.*;
import java.lang.*;

class TCPServer 
{
   public static void main(String argv[]) throws Exception
      {
         String clientSentence;
		 boolean isConnectionOpen = true;
         ServerSocket welcomeSocket = new ServerSocket
         (6789);
		 File myFile1 = new File("serverFile1.txt");
		 File myFile2 = new File("serverFile2.txt");
		 File myFile3 = new File("serverFile3.txt");
         Socket connectionSocket = welcomeSocket.accept();
			BufferedReader inFromClient =
               new BufferedReader(new InputStreamReader(
                  connectionSocket.getInputStream()));
            DataOutputStream outToClient =
               new DataOutputStream(
                  connectionSocket.getOutputStream());
            while(isConnectionOpen){
			clientSentence = inFromClient.readLine();
			String selection = clientSentence;

            if(selection.equals("1")){
			//outToClient.writeBytes(clientSentence);
			outToClient.writeBytes("Hello Client!\n");
			byte[] mybytearray = new byte[(int) myFile1.length()];
			  BufferedInputStream bis = new BufferedInputStream(new FileInputStream(myFile1));
			  bis.read(mybytearray, 0, mybytearray.length);
			  OutputStream os = connectionSocket.getOutputStream();
			  os.write(mybytearray, 0, mybytearray.length);
			  os.flush();
			}
			else if(selection.equals("2")){
			//outToClient.writeBytes(clientSentence);
			outToClient.writeBytes("Hi Client!\n");
			byte[] mybytearray = new byte[(int) myFile2.length()];
			  BufferedInputStream bis = new BufferedInputStream(new FileInputStream(myFile2));
			  bis.read(mybytearray, 0, mybytearray.length);
			  OutputStream os = connectionSocket.getOutputStream();
			  os.write(mybytearray, 0, mybytearray.length);
			  os.flush();
			
			}
			else if(selection.equals("3")){
			//outToClient.writeBytes(clientSentence);
			outToClient.writeBytes("Welcome Client!\n");
			byte[] mybytearray = new byte[(int) myFile3.length()];
			  BufferedInputStream bis = new BufferedInputStream(new FileInputStream(myFile3));
			  bis.read(mybytearray, 0, mybytearray.length);
			  OutputStream os = connectionSocket.getOutputStream();
			  os.write(mybytearray, 0, mybytearray.length);
			  os.flush();
			}
			else{
				outToClient.writeBytes("Hello Client! welcome to our server. Type 1 to send a message. type 2 to send another message. type 3 to sent the other message\n");
			}
			System.out.println("FROM CLIENT: " + 
				clientSentence);
		}
    }
}
