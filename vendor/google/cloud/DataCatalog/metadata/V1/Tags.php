<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/tags.proto

namespace GPBMetadata\Google\Cloud\Datacatalog\V1;

class Tags
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9a100a26676f6f676c652f636c6f75642f64617461636174616c6f672f76312f746167732e70726f746f121b676f6f676c652e636c6f75642e64617461636174616c6f672e76311a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f2286030a03546167120c0a046e616d6518012001280912150a0874656d706c6174651802200128094203e0410212220a1574656d706c6174655f646973706c61795f6e616d651805200128094203e0410312100a06636f6c756d6e180420012809480012410a066669656c647318032003280b322c2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e5461672e4669656c6473456e7472794203e041021a540a0b4669656c6473456e747279120b0a036b657918012001280912340a0576616c756518022001280b32252e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e5461674669656c643a0238013a8101ea417e0a1e64617461636174616c6f672e676f6f676c65617069732e636f6d2f546167125c70726f6a656374732f7b70726f6a6563747d2f6c6f636174696f6e732f7b6c6f636174696f6e7d2f656e74727947726f7570732f7b656e7472795f67726f75707d2f656e74726965732f7b656e7472797d2f746167732f7b7461677d42070a0573636f706522a8020a085461674669656c6412190a0c646973706c61795f6e616d651801200128094203e0410312160a0c646f75626c655f76616c7565180220012801480012160a0c737472696e675f76616c7565180320012809480012140a0a626f6f6c5f76616c7565180420012808480012350a0f74696d657374616d705f76616c756518052001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70480012450a0a656e756d5f76616c756518062001280b322f2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e5461674669656c642e456e756d56616c7565480012120a056f726465721807200128054203e041031a210a09456e756d56616c756512140a0c646973706c61795f6e616d6518012001280942060a046b696e6422cc020a0b54616754656d706c617465120c0a046e616d6518012001280912140a0c646973706c61795f6e616d6518022001280912490a066669656c647318032003280b32342e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e54616754656d706c6174652e4669656c6473456e7472794203e041021a5c0a0b4669656c6473456e747279120b0a036b6579180120012809123c0a0576616c756518022001280b322d2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e54616754656d706c6174654669656c643a0238013a70ea416d0a2664617461636174616c6f672e676f6f676c65617069732e636f6d2f54616754656d706c617465124370726f6a656374732f7b70726f6a6563747d2f6c6f636174696f6e732f7b6c6f636174696f6e7d2f74616754656d706c617465732f7b7461675f74656d706c6174657d22a2020a1054616754656d706c6174654669656c6412110a046e616d651806200128094203e0410312140a0c646973706c61795f6e616d6518012001280912390a047479706518022001280b32262e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e4669656c64547970654203e0410212130a0b69735f7265717569726564180320012808120d0a056f726465721805200128053a8501ea4181010a2b64617461636174616c6f672e676f6f676c65617069732e636f6d2f54616754656d706c6174654669656c64125270726f6a656374732f7b70726f6a6563747d2f6c6f636174696f6e732f7b6c6f636174696f6e7d2f74616754656d706c617465732f7b7461675f74656d706c6174657d2f6669656c64732f7b6669656c647d2298030a094669656c6454797065124e0a0e7072696d69746976655f7479706518012001280e32342e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e4669656c64547970652e5072696d697469766554797065480012440a09656e756d5f7479706518022001280b322f2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e4669656c64547970652e456e756d5479706548001a85010a08456e756d5479706512510a0e616c6c6f7765645f76616c75657318012003280b32392e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e4669656c64547970652e456e756d547970652e456e756d56616c75651a260a09456e756d56616c756512190a0c646973706c61795f6e616d651801200128094203e0410222600a0d5072696d697469766554797065121e0a1a5052494d49544956455f545950455f554e5350454349464945441000120a0a06444f55424c451001120a0a06535452494e47100212080a04424f4f4c1003120d0a0954494d455354414d501004420b0a09747970655f6465636c42cb010a1f636f6d2e676f6f676c652e636c6f75642e64617461636174616c6f672e763150015a46676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f64617461636174616c6f672f76313b64617461636174616c6f67f80101aa021b476f6f676c652e436c6f75642e44617461436174616c6f672e5631ca021b476f6f676c655c436c6f75645c44617461436174616c6f675c5631ea021e476f6f676c653a3a436c6f75643a3a44617461436174616c6f673a3a5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

