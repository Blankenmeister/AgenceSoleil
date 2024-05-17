import Link from "next/link";
import "./homeImage.css";


export default function HomeImage() {
    return (
        <>
        <div className="mt-5 banner">
            <div className="d-flex flex-row align-items-center justify-content-center text">
        <h1 className="m-5 ">BESOIN DE SOLEIL?</h1>
        <Link href="/voyages" className=" btnVoyage btn btn-secondary text-white">Nos voyages</Link>
        </div>
            <img className="mb-5 imgBanner"
            src={"image/home1.jpg"}
            alt={"Image d'une plage"}
        />
        </div>
        </>
    );
}