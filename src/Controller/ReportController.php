<?php

namespace App\Controller;

use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BorrowingRepository;

class ReportController extends AbstractController
{
    //#[Route('/report', name: 'app_report')]
    #[Route('/most-popular-book', name: 'most_popular_book')]

    public function index(BookRepository $repository): Response
    {
        $books = $repository->findMostPopularBooks();
        return $this->render('report/index.html.twig', [
        'books' => $books,
        ]);
    }
}
