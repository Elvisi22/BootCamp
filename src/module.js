const studentdb = (dbname,table)=>{



    const db = new Dexie(dbname);
    db.version(1).stores(table);
    db.open();
    return db;
}



//insert function
const bulkcreate=(dbtable,data)=>{
  let flag = empty(data);
  if(flag){
   dbtable.bulkAdd([data]);
   console.log("data inserted succesfully");
  }else{
   console.log("Please provide data");
  }
  return flag;
   
}

//check textbox evaluation

const empty = object=>{
   let flag = false;

   for(const value in object){
       if(object[value] != "" && object.hasOwnProperty(value)){
           flag = true;
       }else{
           flag = false;
       }

   }
   return flag;
}

// get data from the database

const getData =(dbtable,fn)=>{
   let index = 0;
   let obj ={};

   dbtable.count((count)=>{
       if(count){
           dbtable.each(table=>{
             

                obj = Sortobj(table);
                fn(obj, index++);
              
           })
       }else{
           fn(0);
       }
   })
}

//sort object
const Sortobj = sortobj =>{
   let obj= {};
   obj = {
       id : sortobj.id,
       faculty : sortobj.faculty,
       fname : sortobj.fname,
       lname : sortobj.lname
   }
   return obj;
}

//create dynamic element
const createEle = (tagname , appendTo , fn) =>{
   const element = document.createElement(tagname);
   if(appendTo) appendTo.appendChild(element);
   if(fn) fn(element);
}





export default studentdb;
export{
   bulkcreate,
   getData,
   createEle
}