<?php
//5. Система учета аренды жилья (учесть, что жилье разных типов имеет разные исходные данные и по-разному сдается в наем)

abstract class User
{
	public function getData() {

	}
}
class Guests extends User
{}

class RegistredUser extends User
{
	public login;
	private password;
	public email;
	public function getProfile(){}
	public function editProfile()
	{
		public function isEditAllowed(login)
		{
			if (this.login!=login)
				{return false;}
		}
	}
	public function addRecords(Item_id,who_seller){
		if (this.login!=who_seller)
				return false;
	}
	public function editRecords(Item_id,who_seller){
		if (this.login!=who_seller)
				return false;
	}
	public function dellRecords(Item_id,who_seller)
	{
		if (this.login!=who_seller)
				return false;
	}
	public function sell(Item_id,who_seller)
	{
		if (this.login!=who_seller)
				return false;
		else 
		{
			public function pay();
			dellRecords(Item_id,login); //удаляем товар из списка, чтобы никто не купил его дважды
		}
	
	}
	public function buy(Item_id,who_seller)
	{
		
	}


class Admins extends RegistredUser()
{
	public function addRecords(Item_id){
		return true;}
	public function editRecords(Item_id){return true;}
	public function dellRecords(Item_id){return true;}
	public function isEditAllowed(login)
	{
		return true;
	}
}



class Item 
{
	public Item_id;
	public kategory; //жилое(дом), жилое(квартира), жилое(дача), оффисное, нежилое, гараж
	public floor; //на каком этаже размещается
	public area; // общая площадь
	public size; //размеры
	public price;
	public who_seller;//здесь будем хранить login продавца конкретного товара
}

?>