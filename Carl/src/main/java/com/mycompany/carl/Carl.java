/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.carl;
import java.util.Scanner;

/**
 *
 * @author CL1-PC14
 */
public class Carl {

    public static void main(String[] args) {
        Scanner input = new Scanner(System.in); 
        
        System.out.println("[1] = Rock");
        System.out.println("[2] = Rock");
        System.out.println("[3] = Rock");
        System.out.println("Enter Player 1:");
        int x = input.nextInt();
        System.out.println("Enter Player 2:");
        int y = input.nextInt();
        if (x ==1 && y==1)
        {
        System.out.print("Draw");
        }
        else if ( x == 1 && y == 2){
            System.out.print("PLAYER 2 WINS");
        }
        else if ( x == 1 && y == 3){
            System.out.print("PLAYER 1 WINS");
        }
        else if ( x == 2 && y == 1){
            System.out.print("PLAYER 1 WINS");
        }
        else if ( x == 2 && y == 2){
            System.out.print(" DRAW ");
        }
        else if ( x == 2 && y == 3){
            System.out.print("PLAYER 2 WINS");
        }
        else if ( x == 2 && y == 1){
            System.out.print("PLAYER 1 WINS");
        }
        else if ( x == 3 && y == 2){
            System.out.print("PLAYER 2 WINS");
        }
        else if ( x == 3 && y == 3){
            System.out.print(" DRAW ");
        }
        else
            System.out.print("INCORRECT INPUT!");
    
        
        
    }
}
