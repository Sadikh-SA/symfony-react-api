<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Fournisseur;
use App\Entity\Product;
use App\Repository\CategoryRepository;
use App\Repository\FournisseurRepository;
use App\Repository\ProductRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api", name="api_")
 */
class ProjetController extends AbstractController
{
    #[Route('/projet/produit', name: 'app_projet_produits', methods:'GET')]
    public function index(ProductRepository $produitRepository): Response
    {
        $produits = $produitRepository->findAll();
        $data = [];
  
        foreach ($produits as $produit) {
           $data[] = [
               'id' => $produit->getId(),
               'nom' => $produit->getName(),
               'code' => $produit->getCode(),
               'prix_achat' => $produit->getPrixAchat(),
               'prix_vente' => $produit->getPrixVente(),
               'date_peremtion' => $produit->getDatePeremtion(),
               'date_fabrication' => $produit->getDateCreation(),
               'category' => $produit->getCategory()->getName(),
               'fournisseur' => $produit->getFournisseur()->getName()
           ];
        }
        return $this->json($data);
    }

    #[Route('/projet/category', name: 'app_projet_categories', methods:'GET')]
    public function index_cat(CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findAll();
        $data = [];
  
        foreach ($categories as $categorie) {
           $data[] = [
               'id' => $categorie->getId(),
               'nom' => $categorie->getName(),
               'date_creation'=> $categorie->getDateCreation()
           ];
        }
        return $this->json($data);
    }

    #[Route('/projet/fournisseur', name: 'app_projet_fournisseurs', methods:'GET')]
    public function indexFour(FournisseurRepository $fournisseurRepository): Response
    {
        $fournisseurs = $fournisseurRepository->findAll();
        $data = [];
  
        foreach ($fournisseurs as $fournisseur) {
           $data[] = [
               'id' => $fournisseur->getId(),
               'nom' => $fournisseur->getName(),
               'adresse' => $fournisseur->getAddress(),
               'telephone' => $fournisseur->getTelephone(),
               'date_creation' => $fournisseur->getDateCreation()
           ];
        }
        return $this->json($data);
    }

    /**
     * @Route("/projet/produit", name="project_produit_new", methods={"POST"})
     */
    public function new(EntityManagerInterface $doctrine, Request $request, CategoryRepository $categorieRepository, FournisseurRepository $fournisseurRepository): Response
    {
  
        $produit = new Product();
        $produit->setName($request->request->get('nom'));
        $produit->setCode($request->request->get('code'));
        $produit->setPrixAchat(floatval($request->request->get('prix_achat')));
        $produit->setPrixVente($request->request->get('prix_vente'));
        $produit->setDatePeremtion(new \DateTime($request->request->get('date_peremption')));
        $produit->setDateCreation(new \DateTime($request->request->get('date_fabrication')));
        $categorie = $categorieRepository->find($request->request->get('categorie'));
        $produit->setCategory($categorie);
        $fournisseur = $fournisseurRepository->find($request->request->get('fournisseur'));
        $produit->setFournisseur($fournisseur);
        $doctrine->persist($produit);
        $doctrine->flush();
  
        return $this->json('Created new produit successfully with id ' . $produit->getId());
    }

    /**
     * @Route("/projet/category", name="project_categorie_new", methods={"POST"})
     */
    public function new_Categorie(EntityManagerInterface $doctrine, Request $request): Response
    {
  
        $categorie = new Category();
        $categorie->setName($request->request->get('nom'));
        $categorie->setDateCreation(new DateTime('now'));
  
        $doctrine->persist($categorie);
        $doctrine->flush();
  
        return $this->json('Created new catégorie successfully with id ' . $categorie->getId());
    }

    /**
     * @Route("/projet/fournisseur", name="project_fournisseur_new", methods={"POST"})
     */
    public function new_Fournisseur(EntityManagerInterface $doctrine, Request $request): Response
    {
  
        $fournisseur = new Fournisseur();
        $fournisseur->setName($request->request->get('nom'));
        $fournisseur->setAddress($request->request->get('adresse'));
        $fournisseur->setTelephone($request->request->get('telephone'));
        $fournisseur->setDateCreation(new DateTime('now'));
  
        $doctrine->persist($fournisseur);
        $doctrine->flush();
  
        return $this->json('Created new fournissuer successfully with id ' . $fournisseur->getId());
    }

    /**
     * @Route("/projet/produit/{id}", name="project_show", methods={"GET"})
     */
    public function show(Product $produit): Response
    {
  
        if (!$produit) {
  
            return $this->json('No Produit found for id' . $produit, 404);
        }
  
        $data =  [
            'id' => $produit->getId(),
            'nom' => $produit->getName(),
            'code' => $produit->getCode(),
            'prix_achat' => $produit->getPrixAchat(),
            'prix_vente' => $produit->getPrixVente(),
            'date_peremtion' => $produit->getDatePeremtion(),
            'date_fabrication' => $produit->getDateCreation(),
            'categorie' => $produit->getCategory()->getName(),
            'fournisseur' => $produit->getFournisseur()->getName(),
        ];
          
        return $this->json($data);
    }
  
    /**
     * @Route("/projet/category/{id}", name="project_categorie_show", methods={"GET"})
     */
    public function show_Categorie(Category $categorie): Response
    {
  
        if (!$categorie) {
  
            return $this->json('No Catégorie found for id' . $categorie, 404);
        }
  
        $data =  [
            'id' => $categorie->getId(),
            'nom' => $categorie->getName(),
            'date_creation' => $categorie->getDateCreation()
        ];
          
        return $this->json($data);
    }
    /**
     * @Route("/projet/fournisseur/{id}", name="project_show_fournisseur", methods={"GET"})
     */
    public function show_Fournisseur(Fournisseur $fournisseur): Response
    {
  
        if (!$fournisseur) {
  
            return $this->json('No Catégorie found for id' . $fournisseur, 404);
        }
  
        $data =  [
            'id' => $fournisseur->getId(),
            'nom' => $fournisseur->getName(),
            'adresse' => $fournisseur->getAddress(),
            'telephone' => $fournisseur->getTelephone(),
            'date_creation'=> $fournisseur->getDateCreation()
        ];
          
        return $this->json($data);
    }

    /**
     * @Route("/projet/produit/{id}", name="project_edit", methods={"PUT", "PATCH"})
     */
    public function edit(EntityManagerInterface $entityManager, Request $request, Product $produit, CategoryRepository $categorieRepository, FournisseurRepository $fournisseurRepository): Response
    {
  
        if (!$produit) {
            return $this->json('No produit found for id' . $produit, 404);
        }
  
        $produit->setName($request->request->get('nom'));
        $produit->setCode($request->request->get('code'));
        $produit->setPrixAchat(floatval($request->request->get('prix_achat')));
        $produit->setPrixVente($request->request->get('prix_vente'));
        $produit->setDatePeremtion(new \DateTime($request->request->get('date_peremption')));
        $produit->setDateCreation(new \DateTime($request->request->get('date_fabrication')));
        $categorie = $categorieRepository->find($request->request->get('categorie'));
        $produit->setCategory($categorie);
        $fournisseur = $fournisseurRepository->find($request->request->get('fournisseur'));
        $produit->setFournisseur($fournisseur);
        $entityManager->flush();
  
        $data =  [
            'id' => $produit->getId(),
            'nom' => $produit->getName(),
            'code' => $produit->getCode(),
            'prix_achat' => $produit->getPrixAchat(),
            'prix_vente' => $produit->getPrixVente(),
            'date_peremtion' => $produit->getDatePeremtion(),
            'date_creation' => $produit->getDateCreation(),
            'categorie' => $produit->getCategory()->getName(),
            'fournisseur' => $produit->getFournisseur()->getName()
        ];
          
        return $this->json($data);
    }
    /**
     * @Route("/projet/category/{id}", name="project_edit_categorie", methods={"PUT", "PATCH"})
     */
    public function edit_categorie(EntityManagerInterface $entityManager, Request $request, Category $projet): Response
    {
  
        if (!$projet) {
            return $this->json('No catégorie found for id' . $projet, 404);
        }
  
        $projet->setName($request->request->get('nom'));
        $entityManager->flush();
  
        $data =  [
            'id' => $projet->getId(),
            'name' => $projet->getName(),
            'date_creation' => $projet->getDateCreation()
        ];
          
        return $this->json($data);
    }

    /**
     * @Route("/projet/fournisseur/{id}", name="project_edit_categorie", methods={"PUT", "PATCH"})
     */
    public function edit_fournisseur(EntityManagerInterface $entityManager, Request $request, Fournisseur $projet): Response
    {
  
        if (!$projet) {
            return $this->json('No fournisseur found for id' . $projet, 404);
        }
  
        $projet->setName($request->request->get('nom'));
        $projet->setAddress($request->request->get('adresse'));
        $projet->setTelephone($request->request->get('telephone'));
        $entityManager->flush();
  
        $data =  [
            'id' => $projet->getId(),
            'nom' => $projet->getName(),
            'adresse' => $projet->getAddress(),
            'telephone' => $projet->getTelephone(),
            'date_creation' => $projet->getDateCreation()
        ];
          
        return $this->json($data);
    }
  
    /**
     * @Route("/projet/produit/{id}", name="project_delete_produit", methods={"DELETE"})
     */
    public function delete_produit(EntityManagerInterface $entityManager, Product $projet): Response
    {
  
        if (!$projet) {
            return $this->json('No Produit found for id' . $projet, 404);
        }
  
        $entityManager->remove($projet);
        $entityManager->flush();
  
        return $this->json('Deleted a Produit successfully with id ' . $projet);
    }

    /**
     * @Route("/projet/category/{id}", name="project_delete_categorie", methods={"DELETE"})
     */
    public function delete_categorie(EntityManagerInterface $entityManager, Category $projet): Response
    {
  
        if (!$projet) {
            return $this->json('No project found for id' . $projet, 404);
        }
  
        $entityManager->remove($projet);
        $entityManager->flush();
  
        return $this->json('Deleted a Categorie successfully with id ' . $projet);
    }

    /**
     * @Route("/projet/fournisseur/{id}", name="project_delete_fournisseur", methods={"DELETE"})
     */
    public function delete_fournisseur(EntityManagerInterface $entityManager, Fournisseur $projet): Response
    {
  
        if (!$projet) {
            return $this->json('No project found for id' . $projet, 404);
        }
  
        $entityManager->remove($projet);
        $entityManager->flush();
  
        return $this->json('Deleted a Fournisseur successfully with id ' . $projet);
    }
}
