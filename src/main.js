import studentdb,{
    bulkcreate,
    getData,
    createEle
} from './module.js';

let db = studentdb("Studentdb",{
    students: '++id,faculty,fname,lname'
});


//input tags

const studentid = document.getElementById("studentid");
const faculty = document.getElementById("faculty");
const fname = document.getElementById("fname");
const lname = document.getElementById("lname");


//buttons

const btncreate = document.getElementById("btn-create");
const btnread = document.getElementById("btn-read");
const btnupdate = document.getElementById("btn-update");
const btndelete = document.getElementById("btn-delete");


const notfound = document.getElementById("notfound");

//insert values 

btncreate.onclick= event =>{
   let flag = bulkcreate(db.students,{
        faculty: faculty.value,
        fname : fname.value,
        lname: lname.value
    });
    console.log(flag);


    faculty.value = fname.value = lname.value = "";
    getData(db.students,(data)=>{
        studentid.value = data.id + 1 || 1;
    });
}


//create event on btn read button 

btnread.onclick = table;


//update event 

btnupdate.onclick=()=>{
    const id = parseInt(studentid.value || 0);
    if(id){
        db.students.update(id,{
            faculty : faculty.value,
            fname : fname.value,
            lname: lname.value
        }).then((updated) =>{
            let get = updated?'data updated' : 'Couldnt update data'
            console.log(get);
        })
    }
}

//delete event 

btndelete.onclick = ()=>{
    db.delete();
    db = studentdb("Studentdb",{
        students: '++id,faculty,fname,lname'
    });
    db.open();
    table();
}


//windown on load event 
window.onload = () =>{
    textID(studentid);
}

function textID(textboxid){
    getData(db.students, data=>{
        textboxid.value = data.id+1 || 1;
    })
}


function table(){
    const tbody = document.getElementById("tbody");

    while(tbody.hasChildNodes()){
        tbody.removeChild(tbody.firstChild);

    }

    getData(db.students , (data)=>{

        if(data){

            createEle("tr",tbody,tr=>{

                for (const value in data) {
                  createEle("td",tr,td=>{
                    td.textContent = data[value];
                  })
                }

                createEle("td",tr,td=>{
                    createEle("i",td, i=>{
                        i.className += "fas fa-edit bntedit";
                        i.setAttribute('data-id', data.id);
                        i.onclick = editbtn;
                    })
                })
                createEle("td",tr,td=>{
                    createEle("i",td, i=>{
                        i.className += "fas fa-trash-alt btndelete";
                        i.setAttribute('data-id', data.id);
                        i.onclick = deletedtn;
                    })
                })
            })
        }else{
            notfound.textContent="No record found in the database";
        }
   })

}



function editbtn(event){
    let id = parseInt(event.target.dataset.id);

    db.students.get(id,data=>{
        studentid.value = data.id || 0;
        faculty.value = data.faculty || "";
        fname.value = data.fname || "";
        lname.value = data.lname || ""
    })
}


function deletedtn(event){
    let id = parseInt(event.target.dataset.id);
    db.students.delete(id);
    table();
}



