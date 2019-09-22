<?php
// src/Twig/TwigUtils.php
namespace App\Twig;

use App\Service\SelectionHelper;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class TwigUtils extends AbstractExtension
{
    private $helper;

    public function __construct(SelectionHelper $helper)
    {
        $this->helper = $helper;
    }

    public function getFilters()
    {
        return [
            new TwigFilter('price', [$this, 'formatPrice']),
        ];
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('candidateTotalRates', [$this, 'getCandidateTotalRates']),
            new TwigFunction('candidateMoyRates', [$this, 'getCandidateMoyRates']),
            new TwigFunction('totalMaxPoints', [$this, 'getTotalMaxPoints']),
            new TwigFunction('userRatedCandidate', [$this, 'hasUserRatedCandidate']),
        ];
    }

    /************************************************************************************/

    public function formatPrice($number, $decimals = 0, $decPoint = '.', $thousandsSep = ',')
    {
        $price = number_format($number, $decimals, $decPoint, $thousandsSep);
        $price = '$' . $price;

        return $price;
    }

    public function getCandidateTotalRates($selection, $candidate,$rateType)
    {
        return $this->helper->getCandidateTotalRates($selection, $candidate,$rateType);
    }
    public function getCandidateMoyRates($selection, $candidate,$rateType)
    {
        return $this->helper->getCandidateMoyRates($selection, $candidate,$rateType);
    }

    public function getTotalMaxPoints($selection){
        return $this->helper->getTotalMaxPoints($selection);
    }

    public function hasUserRatedCandidate($selection, $candidate,$user,$rateType){
        return $this->helper->hasUserRatedCandidate($selection, $candidate,$user,$rateType);
    }
}