#include<iostream>
#include<iomanip> 
#include<conio.h>
#include<math.h>
using namespace std;

int duaPuluh = 20000;
int limaRibu = 5000;
int duaRibu = 2000;
int seribu = 1000;
int limaRatus = 500;

main(){
	int x;
	int y;
	int z;
	
	cout<<"Nilai uang masuk : ";cin>>x;cout<<endl;
	cout<<"Nilai belanjaan : ";cin>>y;cout<<endl;
	z = x - y;
	cout<<"Nilai kembalian : ";cout<<z;
	
	int a=0;
	int s=0;
	int t=0;
	int o=0;
	int m=0;
	
	while(z >= duaPuluh){
		a++;
		z = z-duaPuluh;
	}
	while(z >= limaRibu){
		s++;
		z = z-limaRibu;
	}
	while(z >= duaRibu){
		t++;
		z = z-duaRibu;
	}		
	while(z >= seribu){
		o++;
		z = z-seribu;
	}
	while(z >= limaRatus){
		m++;
		z = z-limaRatus;
	}
				
			
		
	
	
	cout<<endl;
	cout<<"1. ";cout<<a;cout<<" lembar ";cout<<duaPuluh;cout<<endl;
	cout<<"2. ";cout<<s;cout<<" lembar ";cout<<limaRibu;cout<<endl;
	cout<<"3. ";cout<<t;cout<<" lembar ";cout<<duaRibu;cout<<endl;
	cout<<"4. ";cout<<o;cout<<" lembar ";cout<<seribu;cout<<endl;
	cout<<"5. ";cout<<m;cout<<" lembar ";cout<<limaRatus;cout<<endl;
	
	getch();
}
