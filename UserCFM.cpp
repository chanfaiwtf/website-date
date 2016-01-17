#include<iostream>
#include<cstring>
#include<cstdlib>
#include<cmath>
#include<algorithm>
#include<fstream>
#include<sstream>
#include<vector>

using namespace std;
#define MAXN 1000

int quserindex;
vector<string> quserinfor;
vector<vector<string> > infor;

struct SR{
	double sim;
	string userid;
}arr[MAXN];

bool cmp (SR s1,SR s2){
	return s1.sim>s2.sim;
}

double fenzi(vector<string> a,int b,int c){
	double s1=0;
	for(int i=4;i<sizeof(a)-1;i++){
		if(quserinfor[i]=="0"||a[i]=="0") continue;
		else{
            s1+=atoi(quserinfor[i].c_str())*atoi(a[i].c_str());
        }
	}
	//cout<<"分子："<<s1<<endl;
	return s1;
}

double fenmu(vector<string> a,int b,int c)
{
	double s2=0,s3=0;
	for(int i=4;i<sizeof(a)-1;i++){
		if(quserinfor[i]=="0"||a[i]=="0")
			continue;
		else{
            s2+=atoi(quserinfor[i].c_str())*atoi(quserinfor[i].c_str());
            s3+=atoi(a[i].c_str())*atoi(a[i].c_str());
		}
	}
	//cout<<"分母："<<sqrt(s2)*sqrt(s3)<<endl;
	return sqrt(s2)*sqrt(s3);
}

double sim(vector<string> a,int b,int c){
	return fenzi(a,b,c)/fenmu(a,b,c);
}

int main(int argc,char *argv[]){
    if(argc != 3){
        cout<<"Number of parameters isn't right."<<endl;
    }
    string QUserId=argv[1];
    string SexPref=argv[2];
    //string QUserId="112233";
    //string SexPref="Male";
	string FileName;
	char name[30];
	fstream InFile;
	string line;
	int numofline=0;
	FileName = string("C:\\Users\\Administrator\\Desktop\\UserInfor.txt");//路径示例
	InFile.open(FileName.c_str(),ios::in);
	if(InFile.is_open()){
        while(getline(InFile,line)){
			istringstream stream(line);
			string word;
            vector<string> tmp;
            tmp.push_back("enable");
			while(stream >> word){
                tmp.push_back(word);
			}
            infor.push_back(tmp);
            tmp.clear();
			numofline++;
	}
	}
	InFile.close();
//    for(int i=0;i<11;i++){
//        cout<<infor[1][i]<<' ';
//    }
//    cout<<endl;
//    cout<<sizeof(infor)<<endl;
//    cout<<numofline<<endl;
	//SR arr[sizeof(infor)];

    for(int i=0;i<numofline;i++){
        if(infor[i][1]==QUserId){
            infor[i][0]="disable";
            quserindex=i;
            quserinfor=infor[i];
        }else{
            if(infor[i][3]!="Male"){
                infor[i][0]="disable";
            }
        }
    }
	double s=0,ss=0;
	int no=0;
	for(int i=0,j=0;i<numofline;i++){
		if(infor[i][0]!="disable"){
            no++;
            arr[j].sim=sim(infor[i],quserindex,i);
            arr[j].userid=infor[i][1];
            ++j;
		}
	}
	sort(arr,arr+no,cmp);
	//cout<<"排序后的相似性及用户ID如下："<<endl;
	//ofstream outfile("rs.txt");
	int c=0;
    for(int i=0;i<no;++i){
        if(c>10) break;
        cout<<arr[i].userid<<endl;
        c++;
    }
    //outfile.close();
	return 0;
}

