<?php

class WalletAPI
{
	protected
	// Индификатор пользователя
	$user_id,
	
	// Кошелек
	$wallet,
	
	// Баланс
	$balance,
	
	// Валюта
	$currency_id,
	
	// Активно?
	$isActive;
	
	function WalletAPI()
	{
	}
	
	/**
	 * Получить все кошелки по индификатору пользователя
	 */
	function getWallets(Database $database, $user_id) {
	}
}

?>
