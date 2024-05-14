import Link from "next/link";
import "./homeImage.css";


export default function HomeImage() {
    return (
        <>
        
        
        <div className="mt-5 banner">
        
            <img className="mb-5 imgBanner"
            src={"image/home1.jpg"}
            alt={"Image d'une plage"}
            
        />
        <h1>BESOIN DE SOLEIL?</h1>
        <Link href="/voyages" className="btnVoyage btn text-white">Nos voyages</Link>
        </div>
        
        </>
    );
}