<?php

namespace EkomiFeedback\Repositories;

use Plenty\Modules\Order\Contracts\OrderRepositoryContract;
use Plenty\Repositories\Models\PaginatedResult;
use Plenty\Plugin\Log\Loggable;
/**
 * Class OrderRepository
 */
class OrderRepository {
	
	use Loggable;
	
    public function __construct() {
        
    }

    /**
     * Gets order
     * 
     * @return array Return order
     */
    public function getOrders($pageNum, $filters) {
        
	    $orderRepo = pluginApp(OrderRepositoryContract::class);

        if ($orderRepo instanceof OrderRepositoryContract) {

            /** @var PaginatedResult $paginatedResult */
            $orderRepo->setFilters($filters);
            $paginatedResult = $orderRepo->searchOrders($pageNum, 50, $with = ['addresses', 'relation', 'reference']);

            if ($paginatedResult instanceof PaginatedResult) {
                if ($paginatedResult->getTotalCount() > 0) {
                    return $paginatedResult->getResult();
                }
            }
        }

        return array();
    }

}
