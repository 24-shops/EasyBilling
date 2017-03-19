<?php

class PaymentAPI
{
	const STATUS_OK = 'ok';
	const STATUS_FAIL = 'fail';
	
	protected
	// Индификатор платежа
	$payment_id,
	
	// Дата создания платежа
	$payment_ts,
	
	// От кого
	$user_id_from,
	
	// Кому
	$user_id_to,
	
	// Сумма
	$amount,
	
	// Валюта
	$currency_id,
	
	// Назначение платежа
	$description;
	
	/**
	 * Получить сумму
	 */
	function getAmount()
	{
		return $this->amount;
	}
	
	/**
	 * Сформировать информацию
	 */
	function getPayment()
	{
		$values = [
			$this->payment_id,
			date("Y-m-d H:i:s", $this->payment_ts),
			$this->getAmount(),
		];
		return sprintf("№%s от %s на сумму %s", $values[0], $values[1], $values[2]);
	}
}
