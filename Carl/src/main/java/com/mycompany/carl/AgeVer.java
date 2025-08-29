/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.carl;

import java.util.Scanner;

/**
 *
 * @author CL1-PC14
 */
public class AgeVer {
    
    public static void main(String[] args) {
    Scanner input = new Scanner(System.in);

        System.out.println("ENTER Age:");
        int age = input.nextInt();

        if ( age >= 18 && age <= 100 ) {
            System.out.println("ABLE TO VOTE");
        }
        else if (age >= 5 && age <= 17) {
            System.out.println("UNABLE TO VOTE");
        } 
        else {
            System.out.println("Invalid Input");
        }
    }
    
}
