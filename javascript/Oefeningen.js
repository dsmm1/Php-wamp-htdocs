var fruiten = ["banaan","appel","kiwi","tomaat"]

// --------------------------------------------
// push voegt waarde toe aan het einde van array
fruiten.push("komokommer")

// verwijderd einde van array -komkommer-
fruiten.pop()

// verwijderd begin van array -banaan-
fruiten.shift()
// voegt toe in het begin
fruiten.unshift()


// copy's een portie van de array
console.log(fruiten);
var keuze = fruiten.slice(1,3);
console.log(keuze);



fruiten.splice(1,4)
console.log(fruiten);

fruiten.splice()

// voegt array samen
fruiten.concat(fruiten)
// alles in een string zetten van alle elementen uit de array
fruiten.join(fruiten)
// toont de lengte van de array
var lengteArray = fruiten.length;
console.log(lengteArray);


console.log(Array.isArray(fruiten)); // true; yes, it's an array
console.log(Array.isArray(5)); // false; no, it's not an arrat
// returned het eerste index van het eerste element

fruiten.indexOf(fruiten);    
console.log(fruiten);
// het checkt of de value bestaat
fruiten.includes("appel");
console.log(fruiten);

