<?php
namespace SprykerFeature\Zed\Checkout\Business\Model\Workflow\Task;

use SprykerFeature\Shared\Customer\Transfer\Customer;
use SprykerFeature\Shared\Sales\Transfer\Order;
use SprykerFeature\Zed\Checkout\Business\Model\Workflow\Context;
use SprykerFeature\Shared\Library\TransferLoader;
use SprykerEngine\Zed\Kernel\Locator;
use SprykerFeature\Zed\Library\Copy;

class SaveCustomerIfNew extends AbstractTask
{


    /**
     * @param Order   $transferOrder
     * @param Context $context
     * @param array   $logContext
     */
    public function __invoke(Order $transferOrder, Context $context, array $logContext)
    {
        if ($transferOrder->getCustomer()->getIdCustomer() || $transferOrder->getCustomer()->isEmpty()) {
            return;
        }

        $customerResult = $this->facadeCustomer->saveNewCustomer($transferOrder->getCustomer());
        if (!$customerResult->isSuccess()) {
            $this->addError(\SprykerFeature_Shared_Checkout_Code_Messages::ERROR_CUSTOMER_NOT_SAVED);
            $this->addErrors($customerResult->getErrors());
        }

        $transferOrder->setCustomer($this->createCustomerTransfer($customerResult->getEntity(), true));
    }

    /**
     * @param \SprykerFeature\Zed\Customer\Persistence\Propel\PacCustomer $entity
     * @param string $enrichment
     * @return Customer
     */
    protected function createCustomerTransfer(\SprykerFeature\Zed\Customer\Persistence\Propel\PacCustomer $entity, $enrichment = null)
    {
        $transfer = new \Generated\Shared\Transfer\CustomerCustomerTransfer();
        Copy::entityToTransfer($transfer, $entity, $enrichment);
        $transfer->setPassword(null); // do not carry around the password hash
        return $transfer;
    }
}
