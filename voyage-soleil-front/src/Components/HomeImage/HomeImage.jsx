import Link from "next/link";
import "./homeImage.css";


export default function HomeImage() {
    return (
        <>
    <div className="contenair1"></div>
    <div className="contenair2"></div>
        <h1>BESOIN <br />
            DE SOLEIL?</h1>
            <Link className="lienBtn" href="/voyages">
        <button className="btn text-white">Nos voyages</button>
        </Link>
            
            
        <div className="banner">
            <img className="imgBanner"
            src={"image/home1.jpg"}
            alt={"Image d'une plage"}
        />
        </div>
        
        </>
    );
}