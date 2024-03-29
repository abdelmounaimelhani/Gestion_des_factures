let Nom=document.getElementById('Nom')
let Tel=document.getElementById('Tel')
let Ville=document.getElementById('Ville')
let PrixLiv=document.getElementById('PrixLiv')
let DateLiv=document.getElementById('DateLiv')

let nbCh=0

//########### Aficher la formelure poure rempliare les donnes des Chambres
let NbChambres=document.getElementById('NbChambres')
let Ajouterchambres=document.getElementById('Ajouterchambres')
let tableChambre=document.getElementById('tableChambre')
let Calculer=document.getElementById('Calculer')
Calculer.style.display='none'
function CreteCh(i){
    let tr=document.createElement('tr')
    tr.classList.add(['d-flex','justify-content-around'])
    let td1=document.createElement('td')
    td1.innerHTML=`<div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Chambre N° ${i}</h6>  
                        </div>
                    </div>`
    let td2=document.createElement('td')
    td2.innerHTML=`<div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Axe</h6>
                            <input name="Axe[]" id="Axe${i}" type="text" class="form-control">
                        </div>
                    </div>`
    let td3=document.createElement('td')
    td3.innerHTML=`<div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Vide</h6>
                            <input name="Vide[]" id="Vide${i}" type="text" class="form-control">
                        </div>
                    </div>`
    tr.appendChild(td1)
    tr.appendChild(td2)
    tr.appendChild(td3)

    return tr
}

function Ajchambres(){
    
    if (NbChambres.value!="" && !isNaN(NbChambres.value)) {
        Calculer.style.display='none'
        tableChambre.innerHTML=""
        nbCh=NbChambres.value
        for (let i = 1; i < Number(NbChambres.value)+1 ; i++) {
            tableChambre.appendChild(CreteCh(i))
            Calculer.style.display='block'
        }
    }else {
        alert("Donne le Nombre Des Chambres Corecte");
       
    }
}
Ajouterchambres.addEventListener('click',Ajchambres)

//################## Resultat

let tableResultat=document.getElementById('tableResultat')
let submit=document.getElementById('submit')
let Tres=document.getElementById('Tres')
Tres.style.display='none'
submit.style.display='none'


function trres(res){
    let tr=document.createElement('tr')
    tr.classList.add(["d-flex","justify-content-around"])
    let Ch=document.createElement('td')
    Ch.innerHTML=`<div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Chambre N° ${res.index}</h6>
                    </div>
                    </div>`
    tr.appendChild(Ch);           
    let M2=document.createElement('td')
    M2.innerHTML=`<div class="d-flex px-2 py-1">
                <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">M²</h6>
                    <input id="MC${res.index}" name="MC[]"  type="text" class="form-control" value="${res.M2}">
                </div>
            </div>`
    tr.appendChild(M2);

    let PTS=document.createElement('td')
    PTS.innerHTML=`<div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Nb PTS</h6>
                        <input id="PTS${res.index}" name="PTS[]" value="${res.PTS}"  type="text" class="form-control">
                    </div>
                </div>`
    tr.appendChild(PTS);

    let HS=document.createElement('td')
    HS.innerHTML=`<div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Nb HS</h6>
                        <input id="HS${res.index}" name="HS[]" value="${res.HS}"  type="text" class="form-control">
                    </div>
                </div>
    `
    tr.appendChild(HS);
    let G=document.createElement('td')
    G.innerHTML=`<div class="d-flex px-2 py-1">
                <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">Nb G</h6>
                    <input id="G${res.index}" name="G[]" value="${res.G}"  type="text" class="form-control">
                </div>
                </div>
    `
    tr.appendChild(G);

    let Prix=document.createElement('td')
    Prix.innerHTML=`<div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Prix</h6>
                        <input id="Prix${res.index}" name="Prix[]" value="${res.Prix}"  type="text" class="form-control">
                    </div>
                </div>
    `
    tr.appendChild(Prix);

    return tr
}

function calculerMat(){
    tableResultat.innerHTML=""
    Tres.style.display='block'

    if (nbCh != 0) {
        submit.style.display='block'
        for (let i = 1; i < nbCh+1; i++) {
            let AXE=document.getElementById("Axe"+i)
            let VIDE=document.getElementById("Vide"+i)
            let PTS = parseInt(Number(AXE.value)/0.62)
            let M2 = AXE.value * VIDE.value
            let Ml = PTS * AXE.value 
            let HS = parseInt(M2*8.22)
            let G = Number(M2/10)
            let Prix = (HS*4.2)+(PTS*29)+(G*95)
            let res={
                index : i,
                PTS : PTS ,
                M2 : M2.toFixed(2) ,
                Ml : Ml.toFixed(2) ,
                HS : HS,
                G : G.toFixed(2) ,
                Prix : Prix.toFixed(2) 
            }
            tableResultat.appendChild(trres(res))
        }
    }else submit.style.display='none'
    
}

Calculer.addEventListener('click',calculerMat)

function validinput(elm){
    if (elm.value.trim()=="") {
        elm.style.border="1px solid red"
    }else elm.style.border="1px solid black"
}


let From=document.getElementById('From')
From.addEventListener('submit',(e)=>{
    
    validinput(Nom);validinput(Tel);validinput(Ville)
    validinput(PrixLiv);validinput(DateLiv)

    if (Nom.value.trim() != '' && Tel.value.trim() != '' && Ville.value.trim() != '' && 
    PrixLiv.value.trim() != ''&& !isNaN(PrixLiv.value.trim()) && DateLiv.value.trim() != '')
    {   
        
    }else{
        e.preventDefault()
    }
})

let Cliant_Exist=document.getElementById('Cliant_Exist')
function handleChange(e){
    if (e.target.value == "") {
        Nom.removeAttribute("disabled");
        Tel.removeAttribute("disabled");
        Nom.value = "";
        Tel.value = "";
        Cliant_Exist.removeAttribute("name");
    } else {
        Cliant_Exist.setAttribute("name", "Cliant_Exist");
        Nom.setAttribute("disabled", true);
        Tel.setAttribute("disabled", true);
        Nom.value = "---------";
        Tel.value = "---------";
    }
    console.log(e.target.value)
}

Cliant_Exist.addEventListener("change",handleChange)