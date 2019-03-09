using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace C_db
{
    #region C_table
    public class C_table
    {
        #region Member Variables
        protected int _id;
        protected string _i_desc;
        protected string _item;
        protected string _i_comp;
        protected string _country;
        protected string _price;
        protected string _w_price;
        protected string _stock;
        protected string _day;
        #endregion
        #region Constructors
        public C_table() { }
        public C_table(string i_desc, string item, string i_comp, string country, string price, string w_price, string stock, string day)
        {
            this._i_desc=i_desc;
            this._item=item;
            this._i_comp=i_comp;
            this._country=country;
            this._price=price;
            this._w_price=w_price;
            this._stock=stock;
            this._day=day;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string I_desc
        {
            get {return _i_desc;}
            set {_i_desc=value;}
        }
        public virtual string Item
        {
            get {return _item;}
            set {_item=value;}
        }
        public virtual string I_comp
        {
            get {return _i_comp;}
            set {_i_comp=value;}
        }
        public virtual string Country
        {
            get {return _country;}
            set {_country=value;}
        }
        public virtual string Price
        {
            get {return _price;}
            set {_price=value;}
        }
        public virtual string W_price
        {
            get {return _w_price;}
            set {_w_price=value;}
        }
        public virtual string Stock
        {
            get {return _stock;}
            set {_stock=value;}
        }
        public virtual string Day
        {
            get {return _day;}
            set {_day=value;}
        }
        #endregion
    }
    #endregion
}