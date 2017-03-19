<?php

class PaymentAPI
{
	protected
	// Индификатор платежа
	$payment_id,
	
	// От кого
	$user_id_from,
	
	// Кому
	$user_id_to,
	
	// Сумма
	$amount,
	
	// Валюта
	$currency_id,
	
	// Описание платежа
	$description;
	
	/**
	 * Получить сумму
	 */
	function getAmount()
	{
		return $this->amount;
	}
}
