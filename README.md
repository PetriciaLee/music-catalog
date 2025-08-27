# Music Catalog - School Project

<!-- 
                                                                      
 ▄▄▄▄▄           ▄             ▀             ▀             ▄          
 █   ▀█  ▄▄▄   ▄▄█▄▄   ▄ ▄▄  ▄▄▄     ▄▄▄   ▄▄▄     ▄▄▄     █     ▄▄▄  
 █▄▄▄█▀ █▀  █    █     █▀  ▀   █    █▀  ▀    █    ▀   █         █   ▀ 
 █      █▀▀▀▀    █     █       █    █        █    ▄▀▀▀█          ▀▀▀▄ 
 █      ▀█▄▄▀    ▀▄▄   █     ▄▄█▄▄  ▀█▄▄▀  ▄▄█▄▄  ▀▄▄▀█         ▀▄▄▄▀ 
                                                                      
                                                                      
                                                                      
 █                                                                    
 █ ▄▄    ▄▄▄   ▄▄▄▄▄   ▄▄▄   ▄▄▄▄    ▄▄▄    ▄▄▄▄   ▄▄▄                
 █▀  █  █▀ ▀█  █ █ █  █▀  █  █▀ ▀█  ▀   █  █▀ ▀█  █▀  █               
 █   █  █   █  █ █ █  █▀▀▀▀  █   █  ▄▀▀▀█  █   █  █▀▀▀▀               
 █   █  ▀█▄█▀  █ █ █  ▀█▄▄▀  ██▄█▀  ▀▄▄▀█  ▀█▄▀█  ▀█▄▄▀               
                             █              ▄  █                      
                             ▀               ▀▀                       

welcome to my source code, pls excuse the mess ¯\_(ツ)_/¯  

![ReactUI Demo](demo-photo.png)

A collection of modern, responsive React components with stunning animations and effects. View the live demo at [react-ui-awesome.netlify.app](https://react-ui-awesome.netlify.app/)

## 🚀 Features

### Core Features
- 📱 Fully Responsive Design
- ♿ Accessible Components (lists of music)

- **Backgrounds**
  - Particle Networks
  - Animated Gradients

- **Navigation Components**
  - Responsive Header
  - Animated Menu Items
  - Mobile-friendly Navigation

- **Buttons & Controls**
  - Gradient Buttons
  - Hover Effects
  - Icon Integrations
  - Loading States

- **Layout Components**
  - Feature Grids
  - Responsive Containers
  - Flex & Grid Layouts

### Technical Features
- 🔧 Built with HTML, CSS and PHP
- 🛠️ MySQL for database
- 📱 Mobile responsive design
  <!--- 🎯 Zero-dependency core components --!>
- 🚀 Optimized for performance
- 📦 Tree-shakeable exports
- 🔄 Hot Module Replacement (HMR)
- 
### Developer Experience
- 🛠️ Easy integration with SQL
- 📚 Well-documented components
- 🎯 CSS support for better UX
- 📱 Responsive testing utilities
- 🔧 Simple configuration
- 📦 Modern build system with PHP

## 🛠️ Built With

- [React](https://reactjs.org/) - A JavaScript library for building user interfaces
- [TypeScript](https://www.typescriptlang.org/) - For type-safe code
- [Vite](https://vitejs.dev/) - Next Generation Frontend Tooling
- [Tailwind CSS](https://tailwindcss.com/) - A utility-first CSS framework
- [Framer Motion](https://www.framer.com/motion/) - For animations
- [React Router](https://reactrouter.com/) - For routing
- [Lucide React](https://lucide.dev/) - Beautiful & consistent icons
- [TypeWriter Effect](https://github.com/tameemsafi/typewriterjs) - For text animations

## 📦 Installation

1. Clone the repository:
```bash
git clone https://github.com/yourusername/ReactUI.git
cd ReactUI
```

2. Install dependencies:
```bash
npm install
```

3. Start the development server:
```bash
npm run dev
```

4. Build for production:
```bash
npm run build
```

## 🔧 Environment Setup

Make sure you have the following installed:
- Node.js (v18 or higher)
- npm (v8 or higher)

## 📁 Project Structure

```
ReactUI/
├── src/
│   ├── components/     # Reusable components
│   ├── pages/         # Page components
│   ├── styles/        # Global styles
│   └── index.php        # Root component
├── public/            # Static assets
└── stil.css       # Project dependencies
```

## 🤝 Contributing


5. Open a Pull Request

### Guidelines for Pull Requests:
- Ensure your code follows the existing style
- Update documentation as needed
- Include a clear description of the changes
- Add appropriate tests if applicable

## 📄 License

This project is PRIVATE and not for public-use.

## 🙏 Acknowledgments

- Thanks to my professors at FOI for teaching me how to use PHP 

## 📞 Contact

For any questions or suggestions, please open an issue or reach out to me on GitHub. --> 




Glazbeni katalog
Uloge: administrator, moderator, registrirani korisnik i anonimni/neregistrirani korisnici

Sustav služi za kupnju pjesama glazbenika od strane medijskih kuća. Sustav mora imati mogućnost prijave i odjave korisnika sa sustava. U sustavu postoji jedan ugrađeni administrator (korisničko ime: admin, lozinka:foi). Administrator je prijavljeni korisnik koji ima vrstu jednaku 0. Sustav obavezno sadrži stranicu o_autoru.html (poveznica na stranicu mora biti u zaglavlju svake stranice) u kojoj se nalaze osobni podaci autora (svi podaci su obavezni): ime, prezime, broj indeksa, mail(obavezno FOI mail), centar, godina (akademska godina prvog upisa kolegija IWA) i slika JPG formata veličine 300x400px (npr. kao na osobnoj iskaznici ili indeksu).

Anonimni/neregistrirani korisnik vidi popis svih pjesama kupljenih od medijskih kuća sortiranih prema broju sviđanja (eng. like). Za svaku pjesmu prikazan je audio zapis, korisničko ime korisnika koji je pjesmu kreirao, broj sviđanja pjesme i naziv pjesme. Može pokrenuti pjesmu. 

Registrirani korisnik uz svoje funkcionalnosti ima i sve funkcionalnosti kao i neprijavljeni korisnik. Na svakoj stranici mora pisati ime i prezime prijavljenog korisnika i njegova vrsta (opisno npr. korisnik). Može kreirati novu vlastitu pjesmu. Pri kreiranju pjesme mora navesti naziv, poveznicu koja vodi do audio zapisa i opis pjesme. Datum i vrijeme kreiranja pjesme se automatski sprema, a ostali podaci su trenutno prazni. Korisnik može vidjeti popis svih svojih pjesma s podacima o nazivu i opisu pjesme, datumu i vremenu kreiranja, datumu i vremenu kupnje (ako postoji) i audio zapis pjesme pri čemu je još navedeno je li pjesma: kupljena (tada sadrži datum i vrijeme kupnje), zatražena kupnja (sadrži id medijske kuće, ali nema datuma i vremena kupnje) ili nije kupljena (nema ni id medijske kuće ni datuma i vremena kupnje). Za svaku zatraženu pjesmu može odobriti kupnju od strane medijske kuće ili je odbiti. Datum i vrijeme kupnje se sprema automatski prilikom odobravanja kupnje, a kod odbijanja za tu pjesmu postavlja se id medijske kuće na vrijednost null. Može ažurirati pojedinu svoju pjesmu sve dok pjesma nije kupljena. Za razliku od neregistriranog korisnika vidi popis svih pjesama. Može filtrirati popis pjesama prema medijskoj kući i/ili vremenskom razdoblju. Vremensko razdoblje definirano je početkom i završetkom u obliku datuma i vremena, a odnosi se na trenutak kreiranja pjesme (datum i vrijeme). Pritiskom na poveznicu koja sadrži naziv pjesme otvara se stranica detalja pjesme gdje se prikazuju naziv pjesme, datum i vrijeme kreiranja, broj sviđanja, opis i gumb za sviđanje pjesme te ime i prezime korisnika koji je kreirao pjesmu i naziv medijske kuće ukoliko je pjesma kupljena. Klikom na gumb za sviđanje može označiti da mu se pjesma sviđa. 

Moderator uz svoje funkcionalnosti ima i sve funkcionalnosti kao i registrirani korisnik. Vidi kao i registrirani korisnik popis svih pjesama gdje su pjesme koje nisu kupljene istaknute (npr. drugačijom bojom ili podebljanim tekstom). Može zatražiti kupnju određene pjesme pri čemu se sprema id medijske kuće. Ne može zatražiti kupnju pjesme koja je već zatražena ili kupljena. Može vidjeti popis svih zatraženih pjesmi za medijsku kuću kojoj pripada pri čemu piše status kupnje u obliku teksta („kupljeno“, „čeka odobrenje“).

Administrator uz svoje funkcionalnosti ima i sve funkcionalnosti kao i moderator. Unosi, ažurira i pregledava korisnike sustava i definira njihove tipove. Unosi, ažurira i pregledava medijske kuće (npr. Medijska kuća “Iva”). Moderator uvijek pripada jednoj medijskoj kući, a jedna medijska kuća može imati više moderatora. Vidi broj sviđanja po medijskim kućama. 

Napomena: Svi datumi moraju se unositi od strane korisnika i prikazati korisniku u formatu „d.m.Y“, a vrijeme (00:00:00 – 23:59:59) u obliku „H:i:s“ (ne koristiti date i time HTML tip za input element). Format „d.m.Y” predstavlja kod PHP date funkciji i preslikava se na hrvatski format „dd.mm.gggg”. Format „H:i:s” predstavlja kod PHP date funkciji i preslikava se na hrvatski format „hh.mm.ss”. Poslužitelj se naziva localhost, a baza podataka je iwa_2021_vz_projekt. Korisnik za pristup do baze podataka naziva se iwa_2021, a lozinka je foi2021. Kod izrade projektnog rješenja treba se točno držati uputa i NE SMIJE se mijenjati (naziv poslužitelja, baze podataka, struktura tablica, korisnik i lozinka). Završeno rješenje projektnog zadatka treba poslati kroz sustav za predaju rješenja nakon čega slijedi obavijest i dogovor o obrani projekta. Obrana projektnog rješenja se obavlja na računalu i bazi podataka nastavnika. 

Projekti ne smiju sadržavati u programskom kodu komentare!

---
Made with ❤️ by Petra J.
