#include <stdio.h>
#include <math.h>
#include <cs50.h>

int main()
{
    int cents_owed;

    float dollar;
    scanf("%f",&dollar);
    cents_owed=round(dollar*100);
    int quarters = cents_owed / 25;
    int dimes = (cents_owed % 25) / 10;
    int nickels = ((cents_owed % 25) % 10) / 5;
    int pennies = ((cents_owed % 25) % 10) % 5;

    printf("%d\n", quarters + dimes + nickels + pennies);
}