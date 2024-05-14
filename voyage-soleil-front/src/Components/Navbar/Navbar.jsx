import Link from "next/link";
import "./navbar.css";
import Image from "next/image";



export default function Navbar() {

    return(
        
    <nav className="navbar navbar navbar-expand-lg px-3">
        <div className="d-flex justify-content-between w-100">
            <Link className="navbar navbar-brand fs-2 fw-normal" href="/">
                <Image
                className="mx-2 d-inline-block align-text-top"
                width={50}
                height={50}
                src='/image/logo.svg'
                alt={"Image de "}
       
            />VOYAGE SOLEIL
            </Link>
        

        <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span className="navbar-toggler-icon"></span>
        </button>

        <div className="collapse navbar-collapse flex-grow-0" id="navbarNav">
          <ul className="navbar-nav">
            <li className="nav-item">
              <Link className="nav-link" href="#">Accueil</Link>
            </li>
            <li className="nav-item">
              <Link className="nav-link" href="/voyages">Nos voyages</Link>
            </li>
            <li className="nav-item">
              <Link className="nav-link" href="/contact">Contact</Link>
            </li>
          </ul>
        </div>
        </div>
    </nav>

    );

}

