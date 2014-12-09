<?php
//5. Система учета аренды жилья (учесть, что жилье разных типов имеет разные исходные данные и по-разному сдается в наем)

abstract class User
{
	public function getData() {

	}
}

abstract class RegistredUser extends User
{
	public login;
	private password;
	public email;
	public function getProfile();
	public function editProfile();
	public function isEditAllowed(login)
		{
			if (this.login!=login)
				{return false;}
		}
}

class Guests extends User
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
	abstract public function buy (Item_id);
}
class Seller extends RegistredUser()
{
		public status;
		public function sail (Item_id);
		public function buy (Item_id)
		{
			if (this.Item_id==Item_id)
			{
				return false;   //нельзя продавцу купить свой же товар
			}
		}
		public function addRecords(Item_id);
		{
			if (this.Item_id==Item_id)
			{
				return false;   //нельзя продавцу купить свой же товар
			}
		}
		public function editRecords(Item_id);
		{
			if (this.Item_id==Item_id)
			{
				return false;   //нельзя продавцу купить свой же товар
			}
		}
		public function dellRecords(Item_id)
		{
			if (this.Item_id==Item_id)
			{
				return false;   //нельзя продавцу купить свой же товар
			}
		}

}

class Buyer extends RegistredUser()
{

		public status;
		public function buy (Item_id);
		public function pay ();
}

class Item 
{
	public Item_id;
	public kategory; //жилое(дом), жилое(квартира), жилое(дача), оффисное, нежилое, гараж
	public floor; //на каком этаже размещается
	public area; // общая площадь
	public size; //размеры
	public price;
}

?>