import {
    Container,
    Heading,
    Stack,
    Text,
    Button,
  } from '@chakra-ui/react';
  import * as React from 'react';
  export default function Title() {
    return (
      <Container
      bgImage="url('https://firebasestorage.googleapis.com/v0/b/bpay-b1197.appspot.com/o/5632952.png?alt=media&token=66015bf2-5d95-466b-86a0-b7b9242befa0')"
      bgSize={'760px'}
       maxW={'full'}>
        <Stack
          textAlign={'center'}
          align={'center'}
          spacing={{ base: 8, md: 10 }}
          py={{ base: 20, md: 28 }}>
          <Heading
            fontFamily={'Raleway'}
            fontWeight={900}
            fontSize={{ base: '2xl', sm: '3xl', md: '5xl' }}
            lineHeight={'110%'}>
            Bill Payment & Management System{' '}
            <Text as={'span'} color={'blue.400'}>
              Dashboard
            </Text>
          </Heading>
        </Stack>
      </Container>
    );
  }