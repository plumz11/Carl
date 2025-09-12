/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.carl;
import java.util.Scanner;
/**
 *
 * @author CL1-PC13
 */
public class cafeteria {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int hotdog = 25;
        int siomai = 14;

        while (true) {
            System.out.println("\nCAFETERIA");
            System.out.println("Menu");
            System.out.println("[Snacks]");
            System.out.println("[1] - Hotdog [25.00]");
            System.out.println("[2] - Siomai [14.00]");
            System.out.println();

            System.out.print("Enter your choice: ");
            int snacks = input.nextInt();

            if (snacks == 1) {
                System.out.println("Hotdog price is 25 pesos");
                System.out.print("Enter Quantity: ");
                int quan = input.nextInt();
                double subtotal = quan * hotdog;
                double vat = subtotal * 0.12;
                double total = subtotal + vat;

                System.out.println("Subtotal : " + subtotal);
                System.out.println("Tax (12%) : " + vat);
                System.out.println("Total : " + total);

                System.out.print("Enter your cash: ");
                double cash = input.nextDouble();
                double change = cash - total;

                if (change >= 0) {
                    System.out.println("Change : " + change);
                } else {
                    System.out.println("Insufficient cash!");
                }

            } else if (snacks == 2) {
                System.out.println("Siomai price is 14 pesos");
                System.out.print("Enter Quantity: ");
                int quan = input.nextInt();
                double subtotal = quan * siomai;
                double vat = subtotal * 0.12;
                double total = subtotal + vat;

                System.out.println("Subtotal : " + subtotal);
                System.out.println("Tax (12%) : " + vat);
                System.out.println("Total : " + total);

                System.out.print("Enter your cash: ");
                double cash = input.nextDouble();
                double change = cash - total;

                if (change >= 0) {
                    System.out.println("Change : " + change);
                } else {
                    System.out.println("Insufficient cash!");
                }

            } else if (snacks == 0) {
                System.out.println("Thank you! Exiting program.");
                break;
            } else {
                System.out.println("Invalid choice.");
            }
        }

        input.close();
    }
}


