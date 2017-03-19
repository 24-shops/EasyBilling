<?php

class PaymentAPI
{
	protected
		// Индификатор платежа
		$id,
		
		// Платеж
		$payment,
		
		// От кого
		$userid_from,
		
		// Кому
		$userid_to,
		
		// Сумма
		$amount,
		
		// Описание платежа
		$description;
	
	function getAmount()
	{
		return $this->amount;
	}
}
