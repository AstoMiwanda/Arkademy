#include<iostream>
#include<iomanip> 
#include<conio.h> 
using namespace std;

class school{
	public :
		bool highSchool;
		bool university;
};

class skill{
	string skill;
	public:
		void getData(){
			cin>>skill;
		}
		void putData(){
			cout<<skill;cout<<endl;
		}
};

main(){
	int jh;
	int js;
	string nama;
	string alamat;
	char hobi[50][50];
	string ketMarried;
	bool married = 1;
	string ketSchool;
	school schools; 
	
	cout<<"Masukan nama anda : ";getline(cin,nama);
	cout<<"Masukan alamat dimana anda tinggal : ";getline(cin,alamat);
	cout<<"Masukan jumlah hobi anda : ";cin>>jh;
	
	for(int x=0; x<jh; x++){
		cout<<x+1;cout<<" : ";cin>>hobi[x];
	}
	cout<<"Apakah anda sudah menikah ? (Y/N) : ";cin>>ketMarried;
	
	if(ketMarried == "Y" || ketMarried == "y"){
		married = 1;
	}else{
		married = 0;
	}
	
	if(married == 1){
		ketMarried = "Menikah";
	}else{
		ketMarried = "Belum Menikah";
	}
	
	cout<<"Apakah anda sekolah di HighSchool ? (Y/N) : ";cin>>ketSchool;
	if(ketSchool == "Y" || ketSchool == "y"){
		schools.highSchool = 1;
		schools.university = 0;
		ketSchool = "High School";
	}else{
		cout<<"Apakah anda belajar di University ? (Y/N) : ";cin>>ketSchool;
		if(ketSchool == "Y" || ketSchool == "y"){
			schools.highSchool = 0;
			schools.university = 1;
			ketSchool = "University";
		}else{
			ketSchool = "Tidak Belajar";
		}
	}
	
	cout<<"Masukan jumlah skill yang anda miliki : ";cin>>js;
	skill s[js];
	cout<<"Masukan skill yang anda miliki : ";cout<<endl;
	for(int i=0; i<js; i++){
		cout<<i+1;cout<<" : ";s[i].getData();
	}
	
	cout<<endl;
	cout<<"Nama Anda : ";cout<<nama;cout<<endl;
	cout<<"Alamat rumah anda : ";cout<<alamat;cout<<endl;
	cout<<"Hobi Anda : ";cout<<endl;
	for(int x=0; x<jh; x++){
		cout<<x+1;cout<<" ";cout<<hobi[x];cout<<endl;
	}
	cout<<"Status Anda : ";cout<<ketMarried;cout<<endl;
	cout<<"Belajar Anda di : ";cout<<ketSchool;cout<<endl;
	cout<<"Skill yang anda miliki : ";cout<<endl;
	for(int i=0; i<js; i++){
		cout<<i+1;cout<<" ";s[i].putData();
	}
	
	getch();
}
