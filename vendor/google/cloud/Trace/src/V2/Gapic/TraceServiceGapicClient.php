<?php
/*
 * Copyright 2017 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was generated from the file
 * https://github.com/google/googleapis/blob/master/google/devtools/cloudtrace/v2/tracing.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Trace\V2\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Trace\V2\BatchWriteSpansRequest;
use Google\Cloud\Trace\V2\Span;
use Google\Cloud\Trace\V2\Span\Attributes;
use Google\Cloud\Trace\V2\Span\Links;
use Google\Cloud\Trace\V2\Span\TimeEvents;
use Google\Cloud\Trace\V2\StackTrace;
use Google\Cloud\Trace\V2\TruncatableString;
use Google\Protobuf\BoolValue;
use Google\Protobuf\GPBEmpty;
use Google\Protobuf\Int32Value;
use Google\Protobuf\Timestamp;
use Google\Rpc\Status;

/**
 * Service Description: This file describes an API for collecting and viewing traces and spans
 * within a trace.  A Trace is a collection of spans corresponding to a single
 * operation or set of operations for an application. A span is an individual
 * timed event which forms a node of the trace tree. A single trace may
 * contain span(s) from multiple services.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $traceServiceClient = new TraceServiceClient();
 * try {
 *     $formattedName = $traceServiceClient->spanName('[PROJECT]', '[TRACE]', '[SPAN]');
 *     $spanId = '';
 *     $displayName = new TruncatableString();
 *     $startTime = new Timestamp();
 *     $endTime = new Timestamp();
 *     $response = $traceServiceClient->createSpan($formattedName, $spanId, $displayName, $startTime, $endTime);
 * } finally {
 *     $traceServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To assist
 * with these names, this class includes a format method for each type of name, and additionally
 * a parseName method to extract the individual identifiers contained within formatted names
 * that are returned by the API.
 *
 * @experimental
 */
class TraceServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.devtools.cloudtrace.v2.TraceService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'cloudtrace.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The default scopes required by the service.
     */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/trace.append',
    ];
    private static $projectNameTemplate;
    private static $spanNameTemplate;
    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/trace_service_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/trace_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/trace_service_grpc_config.json',
            'credentialsConfig' => [
                'scopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/trace_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getProjectNameTemplate()
    {
        if (null == self::$projectNameTemplate) {
            self::$projectNameTemplate = new PathTemplate('projects/{project}');
        }

        return self::$projectNameTemplate;
    }

    private static function getSpanNameTemplate()
    {
        if (null == self::$spanNameTemplate) {
            self::$spanNameTemplate = new PathTemplate('projects/{project}/traces/{trace}/spans/{span}');
        }

        return self::$spanNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'project' => self::getProjectNameTemplate(),
                'span' => self::getSpanNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a project resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     * @experimental
     */
    public static function projectName($project)
    {
        return self::getProjectNameTemplate()->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a span resource.
     *
     * @param string $project
     * @param string $trace
     * @param string $span
     *
     * @return string The formatted span resource.
     * @experimental
     */
    public static function spanName($project, $trace, $span)
    {
        return self::getSpanNameTemplate()->render([
            'project' => $project,
            'trace' => $trace,
            'span' => $span,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - project: projects/{project}
     * - span: projects/{project}/traces/{trace}/spans/{span}.
     *
     * The optional $template argument can be supplied to specify a particular pattern, and must
     * match one of the templates listed above. If no $template argument is provided, or if the
     * $template argument does not match one of the templates listed, then parseName will check
     * each of the supported templates, and return the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     * @experimental
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();

        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }
        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *                       Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           **Deprecated**. This option will be removed in a future major release. Please
     *           utilize the `$apiEndpoint` option instead.
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'cloudtrace.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the client.
     *           For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()}.
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either a
     *           path to a JSON file, or a PHP array containing the decoded JSON data.
     *           By default this settings points to the default client config file, which is provided
     *           in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string `rest`
     *           or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already instantiated
     *           {@see \Google\ApiCore\Transport\TransportInterface} object. Note that when this
     *           object is provided, any settings in $transportConfig, and any `$apiEndpoint`
     *           setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...]
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     * }
     *
     * @throws ValidationException
     * @experimental
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Creates a new span.
     *
     * Sample code:
     * ```
     * $traceServiceClient = new TraceServiceClient();
     * try {
     *     $formattedName = $traceServiceClient->spanName('[PROJECT]', '[TRACE]', '[SPAN]');
     *     $spanId = '';
     *     $displayName = new TruncatableString();
     *     $startTime = new Timestamp();
     *     $endTime = new Timestamp();
     *     $response = $traceServiceClient->createSpan($formattedName, $spanId, $displayName, $startTime, $endTime);
     * } finally {
     *     $traceServiceClient->close();
     * }
     * ```
     *
     * @param string $name The resource name of the span in the following format:
     *
     *     projects/[PROJECT_ID]/traces/[TRACE_ID]/spans/[SPAN_ID]
     *
     * [TRACE_ID] is a unique identifier for a trace within a project;
     * it is a 32-character hexadecimal encoding of a 16-byte array.
     *
     * [SPAN_ID] is a unique identifier for a span within a trace; it
     * is a 16-character hexadecimal encoding of an 8-byte array.
     * @param string            $spanId       The [SPAN_ID] portion of the span's resource name.
     * @param TruncatableString $displayName  A description of the span's operation (up to 128 bytes).
     *                                        Stackdriver Trace displays the description in the
     *                                        Google Cloud Platform Console.
     *                                        For example, the display name can be a qualified method name or a file name
     *                                        and a line number where the operation is called. A best practice is to use
     *                                        the same display name within an application and at the same call point.
     *                                        This makes it easier to correlate spans in different traces.
     * @param Timestamp         $startTime    The start time of the span. On the client side, this is the time kept by
     *                                        the local machine where the span execution starts. On the server side, this
     *                                        is the time when the server's application handler starts running.
     * @param Timestamp         $endTime      The end time of the span. On the client side, this is the time kept by
     *                                        the local machine where the span execution ends. On the server side, this
     *                                        is the time when the server application handler stops running.
     * @param array             $optionalArgs {
     *                                        Optional.
     *
     *     @type string $parentSpanId
     *          The [SPAN_ID] of this span's parent span. If this is a root span,
     *          then this field must be empty.
     *     @type Attributes $attributes
     *          A set of attributes on the span. You can have up to 32 attributes per
     *          span.
     *     @type StackTrace $stackTrace
     *          Stack trace captured at the start of the span.
     *     @type TimeEvents $timeEvents
     *          A set of time events. You can have up to 32 annotations and 128 message
     *          events per span.
     *     @type Links $links
     *          Links associated with the span. You can have up to 128 links per Span.
     *     @type Status $status
     *          Optional. The final status for this span.
     *     @type BoolValue $sameProcessAsParentSpan
     *          Optional. Set this parameter to indicate whether this span is in
     *          the same process as its parent. If you do not set this parameter,
     *          Stackdriver Trace is unable to take advantage of this helpful
     *          information.
     *     @type Int32Value $childSpanCount
     *          Optional. The number of child spans that were generated while this span
     *          was active. If set, allows implementation to detect missing child spans.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Trace\V2\Span
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createSpan($name, $spanId, $displayName, $startTime, $endTime, array $optionalArgs = [])
    {
        $request = new Span();
        $request->setName($name);
        $request->setSpanId($spanId);
        $request->setDisplayName($displayName);
        $request->setStartTime($startTime);
        $request->setEndTime($endTime);
        if (isset($optionalArgs['parentSpanId'])) {
            $request->setParentSpanId($optionalArgs['parentSpanId']);
        }
        if (isset($optionalArgs['attributes'])) {
            $request->setAttributes($optionalArgs['attributes']);
        }
        if (isset($optionalArgs['stackTrace'])) {
            $request->setStackTrace($optionalArgs['stackTrace']);
        }
        if (isset($optionalArgs['timeEvents'])) {
            $request->setTimeEvents($optionalArgs['timeEvents']);
        }
        if (isset($optionalArgs['links'])) {
            $request->setLinks($optionalArgs['links']);
        }
        if (isset($optionalArgs['status'])) {
            $request->setStatus($optionalArgs['status']);
        }
        if (isset($optionalArgs['sameProcessAsParentSpan'])) {
            $request->setSameProcessAsParentSpan($optionalArgs['sameProcessAsParentSpan']);
        }
        if (isset($optionalArgs['childSpanCount'])) {
            $request->setChildSpanCount($optionalArgs['childSpanCount']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CreateSpan',
            Span::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sends new spans to new or existing traces. You cannot update
     * existing spans.
     *
     * Sample code:
     * ```
     * $traceServiceClient = new TraceServiceClient();
     * try {
     *     $formattedName = $traceServiceClient->projectName('[PROJECT]');
     *     $spans = [];
     *     $traceServiceClient->batchWriteSpans($formattedName, $spans);
     * } finally {
     *     $traceServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the project where the spans belong. The format is
     *                             `projects/[PROJECT_ID]`.
     * @param Span[] $spans        Required. A list of new spans. The span names must not match existing
     *                             spans, or the results are undefined.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function batchWriteSpans($name, $spans, array $optionalArgs = [])
    {
        $request = new BatchWriteSpansRequest();
        $request->setName($name);
        $request->setSpans($spans);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'BatchWriteSpans',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
