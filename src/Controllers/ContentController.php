<?php

namespace EkomiFeedback\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use EkomiFeedback\Services\EkomiServices;
use Plenty\Plugin\Http\Request;
use EkomiFeedback\Repositories\ReviewsRepository;
use Plenty\Plugin\Log\Loggable;

/**
 * Class ContentController
 * @package EkomiFeedback\Controllers
 */
class ContentController extends Controller {

    use Loggable;

    /**
     * @param Twig $twig
     * @return string
     */
    public function sendOrdersToEkomi(Twig $twig) {

        $service = pluginApp(EkomiServices::class);
        
        $service->sendOrdersData();

        return $twig->render('EkomiFeedback::content.hello');
    }

    /**
     * Fetches all product reviews by calling getProductFeedback api
     * 
     * @param Twig $twig
     * @param ReviewsRepository $reviewsRepo
     * @return string
     */
    public function fetchProductReviews(Twig $twig) {
        $service = pluginApp(EkomiServices::class);

        $reviews = $service->fetchProductReviews($range = 'all');

        $templateData = array("reviewsCount" => $reviews);

        return $twig->render('EkomiFeedback::content.reviewsSuccess', $templateData);
    }

    /**
     * Loads Reviews by ajax call
     * 
     * @param  \Plenty\Plugin\Http\Request $request
     * @param ReviewsRepository       $reviewsRepo
     * @return string
     */
    public function loadReviews(Request $request, ReviewsRepository $reviewsRepo, Twig $twig) {
        $data = $request->all();
        if (!empty($data)) {
            $itemID = trim($data['prcItemID']);
            $offset = (int) trim($data['prcOffset']);
            $limit = (int) trim($data['reviewsLimit']);
            $filter_type = trim($data['prcFilter']);

            $reviews = $reviewsRepo->getReviews($itemID, $offset, $limit, $filter_type);

            $result = $twig->render('EkomiFeedback::content.reviewsContainerPartial', ['reviews' => $reviews]);

            return json_encode(['result' => $result, 'count' => count($reviews), 'state' => 'success', 'message' => 'reviews fetched']);
        } else {
            $this->getLogger(__FUNCTION__)->error('Empty data fields', ['state' => 'error', 'message' => 'empty data fields', 'data' => $data]);

            return json_encode(['state' => 'error', 'message' => 'empty data fields', 'data' => $data]);
        }
    }

    /**
     * Saves Feeback
     * 
     * @param  \Plenty\Plugin\Http\Request $request
     * @param ReviewsRepository       $reviewsRepo
     * @return string
     */
    public function saveFeedback(Request $request, ReviewsRepository $reviewsRepo) {
        $data = $request->all();

        $response = array(
            'state' => '',
            'message' => ''
        );

        if (!empty($data)) {
            $itemID = trim($data['prcItemID']);
            $reviewId = trim($data['review_id']);
            $helpfulness = trim($data['helpfulness']);

            $review = $reviewsRepo->rateReview($itemID, (int) $reviewId, $helpfulness);

            if (!empty($review)) {
                $response['state'] = 'success';
                $response['message'] = 'Rated successfully';
                $response['helpfullCount'] = $review->helpful;
                $response['totalCount'] = ($review->helpful + $review->nothelpful);
                $response['rateHelpfulness'] = $helpfulness == '1' ? 'helpful' : 'nothelpful';
            } else {
                $response['state'] = 'success';
                $response['message'] = "Something went wrong! Ma be review_id {$reviewId} not exist!";
                $response['data'] = $data;
            }
        } else {
            $response['state'] = 'success';
            $response['message'] = 'Missing data fields';
            $response['data'] = $data;

            $this->getLogger(__FUNCTION__)->error('Missing data fields', $response);
        }

        return json_encode($response);
    }

}
