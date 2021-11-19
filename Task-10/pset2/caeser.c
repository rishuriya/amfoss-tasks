#include<conio.h>
#include<stdio.h>
void main()
{
clrscr();
char a[100];
int i=0,p,l,n;
//printf("Enter value");
scanf("%d",&p);
getc(stdin);
printf("Enter String: ");
gets(a);
while(a[i]!='\0')
{
n=a[i];
l=a[i]+p;
if(l>90 && n<=90)
{
l=l-90;
l=64+l;
}
else if(l>122)
{
l=l-122;
l=96+l;
}
if((l>=65 && l<=90) || (l>=97 && l<=122))
{
printf("%c",l);
}
else
{
printf("%c",n);
}
i++;
}

getch();
}