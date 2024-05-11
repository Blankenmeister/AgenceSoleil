import Link from "next/link";
import "./footer.css";

export default function Footer() {

    return (
        <div className="footer mb-5 pt-2">
            <Link className="logo pt-3 px-3 d-flex justify-content align-items-center text-dark fw-bold" href="/">
                <img
                className="mx-2 d-inline-block align-text-top"
                width={30}
                height={30}
                src={'image/logo.svg'} 
                alt={"Image de "}
            />VOYAGE SOLEIL
            </Link>
            
            <div className="mt-4 d-flex justify-content-center">
            <div className="mb-5 row">
            <ul className="nav">
            <li className="nav-item">
              <Link className="lien nav-link" href="#">Qui sommes-nous?</Link>
            </li>
            <li className="nav-item">
              <Link className="lien nav-link" href="#">Nos engagements</Link>
            </li>
            <li className="nav-item">
              <Link className="lien nav-link" href="#">CGU et mentions légales</Link>
            </li>
          </ul>
        </div>
        </div>

        </div>
    );
}