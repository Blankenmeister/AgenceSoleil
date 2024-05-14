

export default function FormContact() {
  return (
    <>
      
        <h3 className="m-5 contact fw-bold">Contactez-nous</h3>
     
      <div className="container m-5">
        
        <form>
          <div className="mb-3">
            <label htmlFor="nom" className="form-label">Nom</label>
            <input type="text" className="form-control" id="name" aria-describedby="nameHelp" />
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
            <label htmlFor="objet" className="form-label">Objet</label>
            <input type="text" className="form-control" id="objet" aria-describedby="nameHelp" />
            <div id="nameHelp" className="form-text">Objet.</div>
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