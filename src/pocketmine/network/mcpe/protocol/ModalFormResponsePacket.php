<?php

namespace pocketmine\network\mcpe\protocol;

use pocketmine\network\mcpe\NetworkSession;
use pocketmine\network\mcpe\protocol\DataPacket;

class ModalFormResponsePacket extends DataPacket {
    
    const NETWORK_ID = ProtocolInfo::MODAL_FORM_RESPONSE_PACKET;
    // ID is int
    public $formId;
    // Data is usually json when sent and recieved
    public $formData;
    
    public function decodePayload() {
		$this->formId = $this->getUnsignedVarInt();
		$this->formData = $this->getString();
	}

	public function encodePayload() {
	}

	public function handle(NetworkSession $session): bool {
		return true;
	}
    
}
