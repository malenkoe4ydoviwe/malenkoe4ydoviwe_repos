<?php
	var A[][] = array();
	var new_arr = array();
	var n; //n - количество студентов
	var N; //N - количество оценок
	var max=0;
	get (A[][]);
	for (int i=0; i<n; i++)
	{
		
		if (count(A[i])>max)
		{
			max=count(A[i]);
		}

	}
	for (int i=0; i<n; i++)
	{
		for (int j=0; j<max; j++)
		{
			if (!A[i][j])
			{
				A[i][j]=0;
			}
		}
	}

	// var kol_vo_neyspev=0;
	// var sum;
	// var all_sr_arif=0;
	// for (int i=0; i<n; i++)
	// {
	// 	sum=0;
	// 	for (int j=0; j<max; j++)
	// 	{
	// 		sum=sum+A[i][j];
	// 	}
	// 	new_arr[i]=sum/max;
	// 	if ((sum/max)<3)
	// 	{
	// 		kol_vo_neyspev++;
	// 	}
	// 	all_sr_arif=all_sr_arif+sum/4;
	// }


	// var f = true;
	// var tmp;
	// while (f)
	// {
	// 	f=false;
	// 	for (int i=0; i<n-1; i++)
	// 	{
	// 		if (new_arr[i]>new_arr[i+1])
	// 		{
	// 			tmp=new_arr[i+1];
	// 			new_arr[i+1]=new_arr[i];
	// 			new_arr[i]=tmp;
	// 			f=true;
	// 		}
	// 	}

	// }
	// print(kol_vo_neyspev);
	// print (all_sr_arif / n);

?>