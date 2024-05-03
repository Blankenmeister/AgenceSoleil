"use client"

import Link from "next/link";


export default function Home() {
  return (
    <>
    <h1>page d'accueil</h1>
      <div className="voyage">
        <Link href="/voyages">Voyages</Link>
      </div>

    </>
  );
}
