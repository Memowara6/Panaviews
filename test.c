#include<stdio.h>
#include<conio.h>
#include<string.h>
#include<stdlib.h>
int main()
{
char nombre[80];
char valor[20];
char nom[]="hola como estas?";
system("cls");
printf("Introduzca su nombre (80 letras maximo): ");
fgets(nombre, sizeof(nombre), stdin);
scanf("%s",valor);
printf(" \nEl nombre que ha escrito es: %s\n", valor);
printf(" \nEl nombre que ha escrito es: %s\n", nombre);
printf("%s\n",nom);
printf("%c\n",nom[10]);
printf("Largo de la cadena:%d",strlen(nom));
printf("\nEspacio ocupado por la cadena:%d",sizeof(nom));
}