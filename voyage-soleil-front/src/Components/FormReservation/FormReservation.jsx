

export default function FormReservation() {



const envoyer = async (event) => {
  
  event.preventDefault();

  let nom = document.getElementById('nom').value;

  let tableauData = [
    nom
  ]

try {
  const response = await fetch('http://127.0.0.1:8000/api/reservation/new', {
    method : 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body : JSON.stringify(tableauData)
  });


if (response.ok) {
  const data = await response.json();
  console.log('coucou');
  
} else {
  console.log('erreur');
}

}
catch {
  console.log('erreur');
}
};

    return (
    <>
    
        
          <h3 className="m-5 resa fw-bold">Formulaire de réservation</h3>
       
        <div className="container m-5 px-0">
          
          <form onSubmit={envoyer} method="POST">
            <div className="mb-3">
              <label htmlFor="nom" className="form-label">Nom</label>
              <input type="text" className="form-control" id="nom" aria-describedby="nameHelp" />
              <div id="nameHelp" className="form-text">Entrez votre nom.</div>
            </div>
            <div className="mb-3">
              <label htmlFor="prenom" className="form-label">Prénom</label>
              <input type="text" className="form-control" id="prenom" aria-describedby="nameHelp" />
              <div id="nameHelp" className="form-text">Entrez votre prénom.</div>
            </div>
            
            <div className="mb-3">
              <label htmlFor="email" className="form-label">Email</label>
              <input type="email" className="form-control" id="email" aria-describedby="emailHelp" />
              <div id="emailHelp" className="form-text">Entrez votre email.</div>
            </div>
            <div className="mb-3">
              <label htmlFor="message" className="form-label">Message</label>
              <textarea className="form-control" id="message" rows="3"></textarea>
            </div>
            <button type="submit" className="btnContact btn btn-secondary">Submit</button>
          </form>
        </div>
        
        


    
</>


    );


  }
  