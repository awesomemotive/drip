<?php

namespace AwesomeMotive\Drip\Service;

class CampaignService extends AbstractService {

	/**
	 * Returns all campaigns
	 * @return \stdClass
	 */
	public function all() {

		return $this->client->request( 'campaigns' );

	}

	/**
	 * Adds a user to the specified campaign
	 *
	 * @param int $campaign_id
	 * @param \stdClass $subscriber
	 * @return \stdClass
	 */
	public function subscribe( $campaign_id, $subscriber ) {

		$data = new \stdClass();
		$data->subscribers = array( $subscriber );

		return $this->client->request( "campaigns/{$campaign_id}/subscribers", 'post', $data );

	}

}