<?php

require_once('PPBaseService.php');
require_once('PayPalAPIInterfaceService.php');
require_once('PPUtils.php');
/**
 * PayPalAPIInterfaceService wrapper class
 * Auto generated code
 */
class PayPalAPIInterfaceServiceService extends PPBaseService {
	private static $SERVICE_VERSION='87.0';
	public function __construct() {
		parent::__construct('PayPalAPIInterfaceService');
	}

	private function setStandardParams(AbstractRequestType $request) {
		if ($request->getVersion() == null) {
			$request->setVersion($SERVICE_VERSION);
		}
	}
	/**
	 * Service Call: BMCreateButton
	 * @param BMCreateButtonReq $bMCreateButtonReq
	 * @return BMCreateButtonResponseType
	 * @throws APIException
	 */
	public function BMCreateButton($bMCreateButtonReq, $apiUsername=null) {
		$this->setStandardParams($bMCreateButtonReq->BMCreateButtonRequest);
		$ret = new BMCreateButtonResponseType();
		$resp = $this->call("BMCreateButton", $bMCreateButtonReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: BMUpdateButton
	 * @param BMUpdateButtonReq $bMUpdateButtonReq
	 * @return BMUpdateButtonResponseType
	 * @throws APIException
	 */
	public function BMUpdateButton($bMUpdateButtonReq, $apiUsername=null) {
		$this->setStandardParams($bMUpdateButtonReq->BMUpdateButtonRequest);
		$ret = new BMUpdateButtonResponseType();
		$resp = $this->call("BMUpdateButton", $bMUpdateButtonReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: BMManageButtonStatus
	 * @param BMManageButtonStatusReq $bMManageButtonStatusReq
	 * @return BMManageButtonStatusResponseType
	 * @throws APIException
	 */
	public function BMManageButtonStatus($bMManageButtonStatusReq, $apiUsername=null) {
		$this->setStandardParams($bMManageButtonStatusReq->BMManageButtonStatusRequest);
		$ret = new BMManageButtonStatusResponseType();
		$resp = $this->call("BMManageButtonStatus", $bMManageButtonStatusReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: BMGetButtonDetails
	 * @param BMGetButtonDetailsReq $bMGetButtonDetailsReq
	 * @return BMGetButtonDetailsResponseType
	 * @throws APIException
	 */
	public function BMGetButtonDetails($bMGetButtonDetailsReq, $apiUsername=null) {
		$this->setStandardParams($bMGetButtonDetailsReq->BMGetButtonDetailsRequest);
		$ret = new BMGetButtonDetailsResponseType();
		$resp = $this->call("BMGetButtonDetails", $bMGetButtonDetailsReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: BMSetInventory
	 * @param BMSetInventoryReq $bMSetInventoryReq
	 * @return BMSetInventoryResponseType
	 * @throws APIException
	 */
	public function BMSetInventory($bMSetInventoryReq, $apiUsername=null) {
		$this->setStandardParams($bMSetInventoryReq->BMSetInventoryRequest);
		$ret = new BMSetInventoryResponseType();
		$resp = $this->call("BMSetInventory", $bMSetInventoryReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: BMGetInventory
	 * @param BMGetInventoryReq $bMGetInventoryReq
	 * @return BMGetInventoryResponseType
	 * @throws APIException
	 */
	public function BMGetInventory($bMGetInventoryReq, $apiUsername=null) {
		$this->setStandardParams($bMGetInventoryReq->BMGetInventoryRequest);
		$ret = new BMGetInventoryResponseType();
		$resp = $this->call("BMGetInventory", $bMGetInventoryReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: BMButtonSearch
	 * @param BMButtonSearchReq $bMButtonSearchReq
	 * @return BMButtonSearchResponseType
	 * @throws APIException
	 */
	public function BMButtonSearch($bMButtonSearchReq, $apiUsername=null) {
		$this->setStandardParams($bMButtonSearchReq->BMButtonSearchRequest);
		$ret = new BMButtonSearchResponseType();
		$resp = $this->call("BMButtonSearch", $bMButtonSearchReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


	/**
	 * Service Call: DoCancel
	 * @param DoCancelReq $doCancelReq
	 * @return DoCancelResponseType
	 * @throws APIException
	 */
	public function DoCancel($doCancelReq, $apiUsername=null) {
		$this->setStandardParams($doCancelReq->DoCancelRequest);
		$ret = new DoCancelResponseType();
		$resp = $this->call("DoCancel", $doCancelReq, $apiUsername);
		$ret->init(PPUtils::xmlToArray($resp));
		return $ret;
	}


}

?>