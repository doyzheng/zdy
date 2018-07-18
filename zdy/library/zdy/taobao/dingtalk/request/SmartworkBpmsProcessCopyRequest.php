<?php
/**
 * dingtalk API: dingtalk.smartwork.bpms.process.copy request
 * 
 * @author auto create
 * @since 1.0, 2018.03.06
 */
class SmartworkBpmsProcessCopyRequest
{
	/** 
	 * 企业微应用标识
	 **/
	private $agentId;
	
	/** 
	 * 业务分类标识（建议采用JAVA包名的命名方式，）
	 **/
	private $bizCategoryId;
	
	/** 
	 * 审批流描述
	 **/
	private $description;
	
	/** 
	 * 审批流的唯一码
	 **/
	private $processCode;
	
	/** 
	 * 审批流名称
	 **/
	private $processName;
	
	private $apiParas = array();
	
	public function setAgentId($agentId)
	{
		$this->agentId = $agentId;
		$this->apiParas["agent_id"] = $agentId;
	}

	public function getAgentId()
	{
		return $this->agentId;
	}

	public function setBizCategoryId($bizCategoryId)
	{
		$this->bizCategoryId = $bizCategoryId;
		$this->apiParas["biz_category_id"] = $bizCategoryId;
	}

	public function getBizCategoryId()
	{
		return $this->bizCategoryId;
	}

	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setProcessCode($processCode)
	{
		$this->processCode = $processCode;
		$this->apiParas["process_code"] = $processCode;
	}

	public function getProcessCode()
	{
		return $this->processCode;
	}

	public function setProcessName($processName)
	{
		$this->processName = $processName;
		$this->apiParas["process_name"] = $processName;
	}

	public function getProcessName()
	{
		return $this->processName;
	}

	public function getApiMethodName()
	{
		return "dingtalk.smartwork.bpms.process.copy";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->agentId,"agentId");
		RequestCheckUtil::checkMaxLength($this->bizCategoryId,64,"bizCategoryId");
		RequestCheckUtil::checkNotNull($this->processCode,"processCode");
		RequestCheckUtil::checkMaxLength($this->processName,64,"processName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
